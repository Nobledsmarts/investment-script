<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDepositRequest;
use App\Models\AdminWallet;
use App\Models\ChildInvestmentPlan;
use App\Models\Deposit;
use App\Models\MainWallet;
use App\Models\ReferrersInterestRelationship;
use App\Models\Transactions;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DepositController extends Controller {
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDepositRequest $request, Deposit $deposit) {

        $validated = $request->validated();

       $hash = generateTransactionHash($deposit, 'transaction_hash', 25);

       $plan_name_is_valid = ChildInvestmentPlan::where('id', $validated['child_plan_id'])->first();
       $wallet_id_is_valid = MainWallet::where('id', $validated['wallet_id'])->first();

       if(!$wallet_id_is_valid) {
            return response()->json(
                [
                    'errors' => ['message' => ['Wallet not supported or no selected wallet']]
                ], 401
            );
       }

       if(!$plan_name_is_valid) {
            return response()->json(
                [
                    'errors' => ['message' => ['Unknown investment plan has been submitted and failed']]
                ], 401
            );
       }

       $plan_models = ChildInvestmentPlan::where('id', $validated['child_plan_id'])->first();

        //validate submited data, to match exactly what is expected...
       if($plan_models->minimum_amount > $validated['amount'] || $plan_models->maximum_amount < $validated['amount']) {
            return response()->json(
                [
                    'errors' => ['message' => ['Amount out of range of the selected plan']]
                ], 401
            );
       }

       $user_id = Auth::id();

       $data = [
           'user_id' => $user_id,
           'child_investment_plan_id' => $plan_models->id,
           'transaction_hash' => $hash,
           'wallet_id' => $validated['wallet_id'],
           'amount' => $validated['amount'],
           'remaining_duration' => $plan_models->duration,
           'created_at' => date('Y-m-d H:i:s'),
           'updated_at' => date('Y-m-d H:i:s')
       ];

        $create_deposit = $deposit->insert($data);

        if($create_deposit) {
            ChildInvestmentPlan::where('id', $plan_models->id)->increment('total_deposited', $validated['amount']);
            // $user_wallet = UserWallet::find($validated['user_wallet_id']);
            $wallet = MainWallet::find($validated['wallet_id']);
            Transactions::insert([
                'amount' => $validated['amount'],
                'user_id' => $user_id,
                'currency' => $wallet->currency,
                'transaction_hash' => $hash,
                'type' => 'deposit',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            $request_type = ucFirst($request->type);
            // send email
            $user = User::find($user_id);

            $details = [
                'subject' => 'New Deposit Request Created Successfully',
                'username' => $user->name,
                'amount' => $validated['amount'], 
                'transaction_hash' => $hash,
                'wallet' => $wallet->currency,
                'plan' => $plan_name_is_valid->name,
                'duration' => $plan_name_is_valid->duration,
                'wallet_address' => $wallet->currency_address,
                'date' => date("Y-m-d H:i:s"),
                'sign' => '+',
                'color' => 'green',
                'view' => 'emails.user.depositrequest',
                'email' => $user->email
            ];

            $mailer = new \App\Mail\MailSender($details);
            // Mail::to($user->email)->send($mailer);

            $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();
            $details['view'] = 'emails.admin.depositrequest';
            $details['subject'] = "A client ($user->name) has recently created a new deposit request on ". env('SITE_NAME');

            // send to admins
            foreach($admins as $admin) {
                $mailer = new \App\Mail\MailSender($details);
                // Mail::to($admin->email)->send($mailer);
            }

            return response()->json(
                [
                    'success' => ['message' => ['Deposit request was successfully created'], 'wallet' => $wallet_id_is_valid]
                ], 201
            );
        }

        return response()->json(
            [
                'errors' => ['message' => ['Something is not right, our team is working towards restoring the service asap! If this persist, please contact our support.']]
            ], 401
        );
        
    }

    public function reinvest(Request $request, Deposit $deposit) {
        $page_title = env('SITE_NAME') . " Investment Website | Reinvest";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $plans = ChildInvestmentPlan::all();

        if($request->isMethod('post')){
            $validated = $request->validate([
                'child_plan_id' => 'required', 
                'amount' => 'required',
            ]);
            $user_id = Auth::id();
            $user = User::find($user_id);
            
            $hash = generateTransactionHash($deposit, 'transaction_hash', 25);

            if($user->deposit_balance < $validated['amount']) {
                $request->session()->flash('error', "Investment amount less than deposit balance");
                return back();
            }

            $plan_details = ChildInvestmentPlan::where('id', $validated['child_plan_id'])->first();

            if(!$plan_details) {
                $request->session()->flash('error', "Invalid plan seleted");
                return back();
            }

                //validate submited data, to match exactly what is expected...
            if($plan_details->minimum_amount > $validated['amount'] || $plan_details->maximum_amount < $validated['amount']) {
                $request->session()->flash('error', "Amount out of range of the selected plan");
                return back();
            }

            $user_id = Auth::id();

            $data = [
                'user_id' => Auth::id(),
                'child_investment_plan_id' => $plan_details->id,
                'transaction_hash' => $hash,
                'wallet_id' => $validated['wallet_id'],
                'amount' => $validated['amount'],
                'remaining_duration' => $plan_details->duration,
                'reinvestment' => '1',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];

            $insert_data = $deposit->insert($data);

            if($insert_data) {
                ChildInvestmentPlan::where('id', $plan_details->id)->increment('total_deposited', $validated['amount']);
                $wallet = MainWallet::find($validated['wallet_id']);
                Transactions::insert([
                    'amount' => $validated['amount'],
                    'user_id' => $user_id,
                    'currency' => $wallet->currency,
                    'transaction_hash' => $hash,
                    'type' => 'reinvestment',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]);

                // send email
                $user = User::find($user_id);
                $details = [
                    'subject' => 'New Reinvestment Request',
                    'username' => $user->name,
                    'amount' => $validated['amount'], 
                    'transaction_hash' => $hash,
                    'wallet' => $wallet->currency,
                    'plan' => $plan_details->name,
                    'duration' => $plan_details->duration,
                    'wallet_address' => $wallet->currency_address,
                    'date' => date("Y-m-d H:i:s"),
                    'sign' => '+',
                    'color' => 'green',
                    'view' => 'emails.user.reinvestmentrequest',
                    'email' => $user->email,
                ];

                $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();

                $mailer = new \App\Mail\MailSender($details);
                Mail::to($user->email)->send($mailer);
                $details['view'] = 'emails.admin.reinvestmentrequest';

                // send to admins
                foreach($admins as $admin) {
                    $mailer = new \App\Mail\MailSender($details);
                    Mail::to($admin->email)->send($mailer);
                }
                $request->session()->flash('success', "Reinvestment created successfully");
                return back();
            }
            $request->session()->flash('success', "Something is not right, please try again");
            return back();
        } else {
            return view('user.reinvest', compact('page_title', 'mode', 'user', 'plans', 'wallets'));
        }
    }
    public function pendingDeposits(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website";
        $mode = 'dark';
        $user = Auth::user();
        if($request->isMethod('post')){
            if($request->action == 'approve'){
                return $this->approve($request);
            } else if($request->action == 'deny') {
                return $this->deny($request);
            } else if($request->action == 'delete'){
                return $this->delete($request);
            }
        } else{
            $deposits = Deposit::where('status', 'pending')->orderBy('id', 'DESC')->get();
            return view('admin.pending-deposits', compact('page_title', 'mode', 'user', 'deposits'));
        }
    }
    public function deniedDeposits(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website";
        $mode = 'dark';
        $user = Auth::user();
        if($request->isMethod('post')){
             if($request->action == 'delete'){
                return $this->delete($request, 'denied');
            }
        } else{
            $deposits = Deposit::where('status', 'denied')->orderBy('id', 'DESC')->get();
            return view('admin.denied-deposits', compact('page_title', 'mode', 'user', 'deposits'));
        }
    }
    public function approvedDeposits(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website";
        $mode = 'dark';
        $user = Auth::user();
        if($request->isMethod('post')){
             if($request->action == 'delete'){
                return $this->delete($request, 'approved');
            }
        } else{
            $deposits = Deposit::where('status', 'accepted')->orderBy('id', 'DESC')->get();
            return view('admin.approved-deposits', compact('page_title', 'mode', 'user', 'deposits'));
        }
    }
    public function approve(Request $request) {
       $deposit =  new Deposit();
        $deposit_id = $request->id;
        $is_valid_deposit = $deposit->where('id', $deposit_id)->first();
        $deposits = Deposit::where('status', 'pending')->orderBy('id', 'DESC')->get();
        if(!$is_valid_deposit) {
            $request->session()->flash('error', "Deposit request not found");
            return back();
        }

        if($is_valid_deposit->status == 'accepted') {
            $request->session()->flash('error', "Deposit already approved");
            return back();
        }

        $approved_deposit = $deposit->where('id', $deposit_id)->update(
            [
                'status' => 'accepted',
                'expires_at' => addDaysToDate(date("Y-m-d H:i:s"), $is_valid_deposit->remaining_duration),
                'running' => 1,
                'approved_at' => date("Y-m-d H:i:s")
            ]);
        

        if($approved_deposit) {
            
            $user_has_invested = User::where('id', $is_valid_deposit->user_id)->select(['invested'])->first();
            // dd($user_has_invested->invested);
            if(!$user_has_invested->invested) {
                User::where('id', $is_valid_deposit->user_id)->update([
                    'invested' => 1
                ]);
            }
            
            if($is_valid_deposit->reinvestment){
                User::where('id', $is_valid_deposit->user_id)->decrement('deposit_balance', $is_valid_deposit->amount);
            }
            
            $referrer = $is_valid_deposit->user->referrer_uid;
            if($referrer) {
                $referrer_data = User::where('uid', $referrer)->first();
                $interest_receiver_id = $referrer_data->id;
                $depositor_id = $is_valid_deposit->user_id;
                $deposit_id = $is_valid_deposit->id;

                $record_exist_in_referrers_interest_relationship_table = ReferrersInterestRelationship::where([
                    'interest_receiver_id' => $interest_receiver_id,
                    'depositor_id' => $depositor_id
                ])->first();

                if(!$record_exist_in_referrers_interest_relationship_table) {
                    $referrer_interest_rate = $is_valid_deposit->plan->referral_bonus;
                    $referrer_bonus = ($is_valid_deposit->amount/100) * $referrer_interest_rate;

                    $credit_referrer_bonus = User::where('id', $interest_receiver_id)->increment('referral_bonus', $referrer_bonus);

                    if($credit_referrer_bonus) {
                        $insert_into_referrers_interest_relationshipt_table = ReferrersInterestRelationship::insert([
                            'interest_receiver_id' => $interest_receiver_id,
                            'depositor_id' => $depositor_id,
                            'deposit_id' => $is_valid_deposit->id,
                            'amount' => $referrer_bonus,
                            'created_at' => date('Y-m-d H:i:s'),
                            'updated_at' => date('Y-m-d H:i:s')
                        ]);

                        if($insert_into_referrers_interest_relationshipt_table) {
                            // send mail to referrer
                            $details = [
                                'subject' => 'You Received A Referral Bonus',
                                'username' => $is_valid_deposit->user->name,
                                'amount_deposited' => $is_valid_deposit->amount,
                                'bonus' => $referrer_bonus,
                                'date' => date("Y-m-d H:i:s"),
                                'sign' => '+',
                                'color' => 'green',
                                'view' => 'emails.user.referralbonus',
                                'email' => $referrer_data->email
                            ];
            
                            $mailer = new \App\Mail\MailSender($details);
                            Mail::to($referrer_data->email)->send($mailer);
                        }
                    }
                }
            }
            ChildInvestmentPlan::where('id', $is_valid_deposit->child_investment_plan_id)->increment('total_accepted', $is_valid_deposit->amount);
            // send email
            $user = User::find($is_valid_deposit->user_id);

            $details = [
                'subject' => ($is_valid_deposit->reinvestment ? 'Your Reinvestment' : 'Your Deposit') .  ' Has Been Approved',
                'amount' => $is_valid_deposit->amount,
                'transaction_hash' => $is_valid_deposit->transaction_hash,
                'wallet' => $is_valid_deposit->wallet->currency,
                'duration' => $is_valid_deposit->plan->duration,
                'plan' => $is_valid_deposit->plan->name,
                'reinvestment' => $is_valid_deposit->reinvestment,
                'date' => date("Y-m-d H:i:s"),
                'sign' => '+',
                'color' => 'green',
                'view' => 'emails.user.depositapproved',
                'email' => $user->email,
                'username' => $user->name
            ];

            $mailer = new \App\Mail\MailSender($details);
            Mail::to($user->email)->send($mailer);
            // $main_wallet_id = $is_valid_deposit->user_wallet->main_wallet_id;
            User::where('id', $is_valid_deposit->user_id)->increment('currently_invested', $is_valid_deposit->amount);

            $request->session()->flash('success', ($is_valid_deposit->reinvestment ? 'Reinvestment' : 'Deposit') . " approved successfully");
            return back();

        }
        $request->session()->flash('success', "Something is not right");
        return back();
    }

    public function deny(Request $request) {
        $page_title = env('SITE_NAME') . " Investment Website";
        $mode = 'dark';
        $user = Auth::user();

        $deposit =  new Deposit();
        $deposit_id = $request->id;
        $is_valid_deposit = $deposit->where('id', $deposit_id)->first();
        $deposits = Deposit::where('status', 'pending')->orderBy('id', 'DESC')->get();

        if(!$is_valid_deposit) {
            $request->session()->flash('error', "Deposit request not found");
            return back();
        }

        if($is_valid_deposit->status == 'accepted') {
            $request->session()->flash('error', "Deposit already approved");
            return back();
        }

        if($is_valid_deposit->status == 'denied') {
            $request->session()->flash('error', "Deposit already denied");
            return back();
        }

        $deny_deposit = $deposit->where('id', $deposit_id)->update(
            [
                'status' => 'denied',
                'denied_at' => date("Y-m-d H:i:s")
            ]);
        

        if($deny_deposit) {
            ChildInvestmentPlan::where('id', $is_valid_deposit->child_investment_plan_id)->increment('total_denied', $is_valid_deposit->amount);
            // send email
            $user = User::find($is_valid_deposit->user_id);

            $details = [
                'subject' => ($is_valid_deposit->reinvestment ? 'Your Reinvestment' : 'Your Deposit') .  ' Has Been Denied',
                'amount' => $is_valid_deposit->amount,
                'transaction_hash' => $is_valid_deposit->transaction_hash,
                'wallet' => $is_valid_deposit->wallet->currency,
                'duration' => $is_valid_deposit->plan->duration,
                'plan' => $is_valid_deposit->plan->name,
                'date' => date("Y-m-d H:i:s"),
                'reinvestment' => $is_valid_deposit->reinvestment,
                'email' => $user->email,
                'username' => $user->name,
                'sign' => '::~',
                'color' => 'red',
                'view' => 'emails.user.depositdenied'
            ];

            $mailer = new \App\Mail\MailSender($details);
            Mail::to($user->email)->send($mailer);

           $request->session()->flash('success', "Deposit denied successfully");
            return back();
        }
        $request->session()->flash('error', "Something is not right");
        return back();
    }
    public function pauseDeposit(Request $request) {
        $deposit =  new Deposit();
        $deposit_id = $request->id;
        $is_valid_deposit = $deposit->where('id', $deposit_id)->first();

        if(!$is_valid_deposit) {
            return response()->json([
                'errors' => ['message' => ['Investment not found']]
            ], 401);
        }

        if($is_valid_deposit->running == '0') {
            return response()->json([
                'errors' => ['message' => ['Investment already paused']]
            ], 401);
        }

        $pause_deposit = $deposit->where('id', $deposit_id)->update([
            'running' => '0',
        ]);
        if($pause_deposit){
            return response()->json([
                'success' => ['message' => ['Investment paused successfully']]
            ], 200);
        }
    }
    public function playDeposit(Request $request) {
        $deposit =  new Deposit();
        $deposit_id = $request->id;
        $is_valid_deposit = $deposit->where('id', $deposit_id)->first();

        if(!$is_valid_deposit) {
            return response()->json(
            [
                    'errors' => ['message' => ['Investment not found']]
                ], 401
            );
        }

        if($is_valid_deposit->running == '1') {
            return response()->json([
                   'errors' => ['message' => ['Investment already running']]
            ], 401);
        }

        $play_deposit = $deposit->where('id', $deposit_id)->update([
            'running' => '1',
        ]);
        
        if($play_deposit){
           return response()->json([
                'success' => ['message' => ['Investment has started running']]
            ], 200);
        }
    }
    public function delete(Request $request) {
        $deposit =  new Deposit();
        $deposit_id = $request->id;
        $is_valid_deposit = $deposit->where('id', $deposit_id)->first();

        if(!$is_valid_deposit) {
            $request->session()->flash('error', "Deposit not found");
            return back();
        } else {
           $delete_deposit = $deposit->where('id', $deposit_id)->delete();
           if($delete_deposit){
                $request->session()->flash('success', "Deposit deleted successfully");
               return back();
            }
        }
    }

}
