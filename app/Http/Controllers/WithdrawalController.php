<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWithdrawalRequest;
use App\Models\Transactions;
use App\Models\User;
use App\Models\SiteSettings;
use App\Models\UserWallet;
use App\Models\Withdrawal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WithdrawalController extends Controller
{
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) {
        $page_title = env('SITE_NAME') . " Investment Website | Withdrawal";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $withdrawal = new Withdrawal();
        $wallets = UserWallet::where('user_id', $user['id'])->get();
        
        if($request->isMethod('post')){
            $user_id = $user->id;
            $validated = $request->validate([
                'wallet_id' => 'required',
                'amount' => 'required',
                'type' =>  'required',
                'wallet_address' => 'required'
            ]);
            $hash = generateTransactionHash($withdrawal, 'transaction_hash', 25);
            $wallet_id_is_valid = MainWallet::where('id', $validated['wallet_id'])->first();
            
            if(!$wallet_id_is_valid) {
                if(!isset($request->api)){
                    $request->session()->flash('error', "Invalid wallet for this transaction");
                    return back();
                }
                return response()->json(
                    [
                        'errors' => ['message' => ['Invalid wallet for this transaction']]
                    ], 400
                );
            }
            
            $user = User::find($user_id);
            if($user[$validated['type']] < $validated['amount']) {
                if(!isset($request->api)){
                    $request->session()->flash('error', "Insufficient fund for this transaction");
                    return back();
                }
                return response()->json(
                    [
                        'errors' => ['message' => ['Insufficient fund for this transaction']]
                    ], 403
                );
            }
            
            $data = [
                'user_id' => $user_id,
                'transaction_hash' => $hash,
                'wallet_id' => $validated['wallet_id'],
                'wallet_address' => $validated['wallet_address'],
                'amount' => $validated['amount'],
                'type' => $validated['type'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];
            $insert_data = $withdrawal->insert($data);

           
            if($insert_data) {
                
                $wallet = MainWallet::find($validated['wallet_id']);
                Transactions::insert([
                    'amount' => $validated['amount'],
                    'user_id' => $user_id,
                    'currency' => $wallet->currency,
                    'transaction_hash' => $hash,
                    'type' => 'withdrawal',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
                
                $details = [
                    'subject' => 'Pending Withdrawal Request',
                    'email' => $user->email,
                    'site_address' => env('SITE_ADDRESS'),
                    'amount' => $validated['amount'],
                    'transaction_hash' => $hash,
                    'wallet' => $wallet->currency,
                    'wallet_address' => $wallet->wallet_address,
                    'date' => date("Y-m-d H:i:s"),
                    'view' => 'emails.user.withdrawalrequest',
                    'username' => $user->name
                ];
                $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();
                
                $mailer = new \App\Mail\MailSender($details);
                Mail::to($user->email)->send($mailer);
                $details['view'] = 'emails.admin.withdrawalrequest';
                $details['subject'] = 'A User Has Requested For Withdrawal';
                $details['username'] = $user->name;

                foreach($admins as $admin) {
                    $mailer = new \App\Mail\MailSender($details);
                    Mail::to($admin->email)->send($mailer);
                }
                
                if(!isset($request->api)){
                    $request->session()->flash('success', "Withdrawal request created, please check your email for more details.");
                    return back();
                }
                return response()->json(
                    [
                        'success' => ['message' => ['Withdrawal request created, please check your email for more details.']]
                    ], 201
                );
               
            } else {
                if(!isset($request->api)){
                    $request->session()->flash('error', "Unable to create withdrawal request");
                    return back();
                }
                return response()->json(
                    [
                        'error' => ['message' => ['Unable to create withdrawal request']]
                    ], 201
                );
            }
        } else {
            return view('user.withdrawal', compact('page_title', 'mode', 'user', 'wallets'));
        }
    }
    public function pendingWithdrawals(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website";
        $mode = 'dark';
        $user = Auth::user();
        $withdrawals = Withdrawal::where('status', 'pending')->orderBy('id', 'DESC')->get();

        if($request->isMethod('post')){
            if($request->action == 'approve'){
                return $this->approve($request);
            } else if($request->action == 'deny') {
                return $this->deny($request);
            } else if($request->action == 'delete'){
                return $this->delete($request, 'pending');
            }
        } else {
            return view('admin.pending-withdrawals', compact('page_title', 'mode', 'user', 'withdrawals'));
        }
    }
    public function approvedWithdrawals(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website";
        $mode = 'dark';
        $user = Auth::user();
        if($request->isMethod('post')){
             if($request->action == 'delete'){
                return $this->delete($request, 'approved');
            }
        } else{
            $withdrawals = Withdrawal::where('status', 'accepted')->orderBy('id', 'DESC')->get();
            return view('admin.approved-withdrawals', compact('page_title', 'mode', 'user', 'withdrawals'));
        }
    }
    public function deniedWithdrawals(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website";
        $mode = 'dark';
        $user = Auth::user();
        if($request->isMethod('post')){
             if($request->action == 'delete'){
                return $this->delete($request, 'denied');
            }
        } else{
            $withdrawals = Withdrawal::where('status', 'denied')->orderBy('id', 'DESC')->get();
            return view('admin.denied-withdrawals', compact('page_title', 'mode', 'user', 'withdrawals'));
        }
    }
    public function approve($request) {
        $withdrawal = new Withdrawal();
        $withdrawal_id = $request->id;
        $is_valid_withdraw = $withdrawal->find($withdrawal_id);

        if(!$is_valid_withdraw) {
            $request->session()->flash('error', "Withdrawal request not found");
            return back();
            
        }

        if($is_valid_withdraw->status == 'accepted') {
            $request->session()->flash('error', "Withdrawal request already approved");
            return back();
            
        }

        if($is_valid_withdraw->status == 'denied') {
            $request->session()->flash('error', "Withdrawal request already denied");
            return back();
        }

        // check if user has enough balance before debiting
        $user_details = User::find($is_valid_withdraw->user_id);

        if($user_details[$is_valid_withdraw->type] < $is_valid_withdraw->amount) {
            // send user site notification about transaction approval failure
            $request->session()->flash('error', "Error approving this request, user has insufficient funds.");
            return back();
            
        }

        $decrement_deposit_balance = User::where('id', $is_valid_withdraw->user_id)->decrement($is_valid_withdraw->type, $is_valid_withdraw->amount);
        if($decrement_deposit_balance) {
            $approved_withdrawal = $withdrawal->where('id', $withdrawal_id)->update(
                [
                    'status' => 'accepted',
                    'approved_at' => date("Y-m-d H:i:s")
                ]);

            if($approved_withdrawal) {
                // send email
                $user = User::find($is_valid_withdraw->user_id);

                $details = [
                    'subject' => 'Withdrawal Successful',
                    'amount' => $is_valid_withdraw->amount,
                    'transaction_hash' => $is_valid_withdraw->transaction_hash,
                    'wallet' => $is_valid_withdraw->wallet->currency,
                    'wallet_address' => $is_valid_withdraw->wallet_address,
                    'date' => date("Y-m-d H:i:s"),
                    'view' => 'emails.user.withdrawalapproved',
                    'username' => $user->name,
                    'email' => $user->email
                ];

                $mailer = new \App\Mail\MailSender($details);
                Mail::to($user->email)->send($mailer);

                $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();
                $details['view'] = 'emails.admin.withdrawalapproved';
                $details['subject'] = 'A Withdrawal Request Was Approved';

                // send to admins
                foreach($admins as $admin) {
                    $mailer = new \App\Mail\MailSender($details);
                    Mail::to($admin->email)->send($mailer);
                }

                // update wallet transaction count
                // AdminWallet::where([
                //     'id' => $is_valid_withdraw->user_wallet->admin_wallet_id
                // ])->increment('total_traded', $is_valid_withdraw->amount);

                // update total withdrawn
                User::where('id', $is_valid_withdraw->user_id)->increment('total_withdrawn', $is_valid_withdraw->amount);

                $request->session()->flash('success', "Withdrawal approved.");
                return back();
            }
        } else {
            $request->session()->flash('error', "something unexpectedly went wrong");
            return back();
        }


    }

    public function deny($request) {
        $withdrawal = new Withdrawal();
        $withdrawal_id = $request->id;
        $is_valid_withdrawal = $withdrawal->find($withdrawal_id);

        if(!$is_valid_withdrawal) {
            $request->session()->flash('error', "Withdrawal request not found");
           return back();
        }

        if($is_valid_withdrawal->status == 'accepted') {
            $request->session()->flash('error', "Withdrawal request already approved");
            return back();
        }

        if($is_valid_withdrawal->status == 'denied') {
            $request->session()->flash('error', "Withdrawal request already denied");
           return back();
        }

        if($is_valid_withdrawal) {
            $denied_withdrawal = $withdrawal->where('id', $withdrawal_id)->update(
                [
                    'status' => 'denied',
                    'denied_at' => date("Y-m-d H:i:s")
                ]);

            if($denied_withdrawal) {
                // send email
                $user = User::find($is_valid_withdrawal->user_id);

                $details = [
                    'subject' => 'Withdrawal Denied',
                    'amount' => $is_valid_withdrawal->amount,
                    'transaction_hash' => $is_valid_withdrawal->transaction_hash,
                    'wallet' => $is_valid_withdrawal->wallet->currency,
                    'wallet_address' => $is_valid_withdrawal->wallet_address,
                    'date' => date("Y-m-d H:i:s"),
                    'view' => 'emails.user.withdrawaldenied',
                    'username' => $user->name,
                    'email' => $user->email
                ];

                $mailer = new \App\Mail\MailSender($details);
                // Mail::to($user->email)->send($mailer);

                $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();
                $details['view'] = 'emails.admin.withdrawaldenied';
                $details['subject'] = 'A Withdrawal Request Was Denied';

                // send to admins
                foreach($admins as $admin) {
                    $mailer = new \App\Mail\MailSender($details);
                    // Mail::to($admin->email)->send($mailer);
                }

                $request->session()->flash('success', "Withdrawal denied.");
                return back();
            }
        } else {
            $request->session()->flash('error', "something unexpectedly went wrong.");
            return back();
        }
    }
    
    public function delete(Request $request, $type) {
        $withdrawal = new Withdrawal();
        $withdrawal_id = $request->id;
        $is_valid_withdrawal = $withdrawal->find($withdrawal_id);

        if(!$is_valid_withdrawal) {
            $request->session()->flash('error', "withdrawal not found");
            return back();
        } else {
            $delete_withdrawal = $withdrawal->where('id', $withdrawal_id)->delete();
            if($delete_withdrawal){
                $request->session()->flash('success', "withdrawal Deleted");
                return back();
            }
        }
    }


}