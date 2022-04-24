<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Transactions;
use App\Models\Deposit;
use App\Models\MainWallet;
use App\Models\ParentInvestmentPlan;
use App\Models\ChildInvestmentPlan;
use App\Models\AccountFundingRequest;
use App\Models\Withdrawal;
use App\Models\Reviews;
use App\Models\SiteSettings;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller {
    public function index(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Dashboard";
        $mode = 'dark';
        $user = Auth::user();
        $pending_deposits = Deposit::where('status', 'pending')->count();
        $running_investments =  Deposit::where('running', '1')->count();
        $total_deposits = Deposit::count();
        $total_withdrawn = Withdrawal::count();
        $total_paid = Withdrawal::where('status', 'approved')->count();
        $total_users = User::count();
        $users = User::all();
        $pending_withdrawals = Withdrawal::where('status', 'pending')->count();
        $currently_invested = User::sum('currently_invested');
        $total_deposited = Deposit::sum('amount');
        if($request->isMethod('post')){
            return $this->sendNewsLetter($request);
        } else {
            return view('admin.index', compact('page_title', 'mode', 'users', 'user', 'pending_deposits', 'running_investments', 'total_deposits', 'total_withdrawn', 'total_paid', 'total_users', 'pending_withdrawals', 'currently_invested', 'total_deposited'));
        }
    }
    public function sendNewsLetter(Request $request){
        $receivers = $request->receivers;
        $subject = $request->subject;
        $message = $request->message;
        $details = [
            'message' => $message,
            'subject' => $subject,
            'view' => 'emails.user.newsletter'
        ];
        try {
            foreach($receivers as $receiver) {
                $mailer = new \App\Mail\MailSender($details);
                Mail::to($receiver)->send($mailer);
            }
            $request->session()->flash('success', 'Newsletter sent successfully');
            return back();

        } catch(\Exception $e){
            $request->session()->flash('error', 'Something went wrong');
            return back();
        }
    }
    public function referralBonus(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Manage Referral Bonus";
        $mode = 'dark';
        $user = Auth::user();
        $users = User::all();
        if($request->isMethod('post')){
            $dbAction = $request->action == 'fund' ? 'increment' : 'decrement';
            $insertAction = $request->action == 'fund' ? 'credit' : $request->action;
            $user = User::where('name', $request->name)->first();
            if(!$user) {
                $request->session()->flash('error', "Unknown user selected ");
                return back();
            }
            if(Auth::user()['is_admin']) {
                User::where([
                    'id' => $user->id
                ])->$dbAction('referral_bonus', $request->amount);
                $request->session()->flash('success', "User referral bonus has been ". $request->action ."ed with $$request->amount");
                return back();
            } else {
                AccountFundingRequest::insert([
                    'amount' => $request->amount,
                    'user_id' => Auth::id(),
                    'receiver_id' => $user->id,
                    'type' => 'referral_bonus',
                    'action' => $insertAction,
                    'created_at' => date('Y-d-m H:i:s'),
                    'updated_at' => date('Y-d-m H:i:s'),
                    'approved_at' => date('Y-d-m H:i:s'),
                ]);

                $details = [
                    'amount' => $request->amount,
                    'funder' => Auth::user()['name'],
                    'fundee' => $user->name,
                    'subject' => 'A Moderator Requested To '. $request->action .' A User referral bonus',
                    'date' => date('Y-d-m H:i:s'),
                    'view' => 'emails.admin.' . $request->action . 'accountrequest'
                ];
                $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();

                // send to admins
                foreach($admins as $admin) {
                    $mailer = new \App\Mail\MailSender($details);
                    Mail::to($admin->email)->send($mailer);
                }
                $request->session()->flash('success', "User will be funded with $$request->amount when admin approves it");
                return back();
            }
            $request->session()->flash('success', "Error " . $request->action . "ing the user account");
            return back();
        } else {
            return view('admin.referral-bonus', compact('page_title', 'mode', 'user', 'users'));
        }
    }
    public function walletBalance(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Manage Wallet Balance";
        $mode = 'dark';
        $user = Auth::user();
        $users = User::all();
        
        if($request->isMethod('post')){
            $dbAction = $request->action == 'fund' ? 'increment' : 'decrement';
            $insertAction = $request->action == 'fund' ? 'credit' : $request->action;
            $user = User::where('name', $request->name)->first();
            if(!$user) {
                $request->session()->flash('error', "Unknown user selected ");
                return back();
            }
            if(Auth::user()['is_admin']) {
                User::where([
                    'id' => $user->id
                ])->$dbAction('deposit_balance', $request->amount);
                $request->session()->flash('success', "User Deposit balance has been ". $request->action ."ed with $$request->amount");
                return back();
            } else {
                AccountFundingRequest::insert([
                    'amount' => $request->amount,
                    'user_id' => Auth::id(),
                    'receiver_id' => $user->id,
                    'type' => 'deposit_balance',
                    'action' => $insertAction,
                    'created_at' => date('Y-d-m H:i:s'),
                    'updated_at' => date('Y-d-m H:i:s'),
                    'approved_at' => date('Y-d-m H:i:s'),
                ]);

                $details = [
                    'amount' => $request->amount,
                    'funder' => Auth::user()['name'],
                    'fundee' => $user->name,
                    'subject' => 'A Moderator Requested To '. $request->action .' A User Deposit Balance',
                    'date' => date('Y-d-m H:i:s'),
                    'view' => 'emails.admin.' . $request->action . 'accountrequest'
                ];
                $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();

                // send to admins
                foreach($admins as $admin) {
                    $mailer = new \App\Mail\MailSender($details);
                    Mail::to($admin->email)->send($mailer);
                }
                $request->session()->flash('success', "User will be funded with $$request->amount when admin approves it");
                return back();
            }
            $request->session()->flash('success', "Error " . $request->action . "ing the user account");
            return back();
        } else {
            return view('admin.wallet-balance', compact('page_title', 'mode', 'user','users'));
        }
    }
    
    public function depositInterest(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Manage Interest";
        $mode = 'dark';
        $user = Auth::user();
        $users = User::all();
        
        if($request->isMethod('post')){
            $dbAction = $request->action == 'fund' ? 'increment' : 'decrement';
            $insertAction = $request->action == 'fund' ? 'credit' : $request->action;
            $user = User::where('name', $request->name)->first();
            if(!$user) {
                $request->session()->flash('error', "Unknown user selected ");
                return back();
            }
            if(Auth::user()['is_admin']) {
                User::where([
                    'id' => $user->id
                ])->$dbAction('deposit_interest', $request->amount);
                $request->session()->flash('success', "User Deposit Interest has been ". $request->action ."ed with $$request->amount");
                return back();
            } else {
                AccountFundingRequest::insert([
                    'amount' => $request->amount,
                    'user_id' => Auth::id(),
                    'receiver_id' => $user->id,
                    'type' => 'deposit_interest',
                    'action' => $insertAction,
                    'created_at' => date('Y-d-m H:i:s'),
                    'updated_at' => date('Y-d-m H:i:s'),
                    'approved_at' => date('Y-d-m H:i:s'),
                ]);

                $details = [
                    'amount' => $request->amount,
                    'funder' => Auth::user()['name'],
                    'fundee' => $user->name,
                    'subject' => 'A Moderator Requested To '. $request->action .' A User Deposit Interest',
                    'date' => date('Y-d-m H:i:s'),
                    'view' => 'emails.admin.' . $request->action . 'accountrequest'
                ];
                $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();

                // send to admins
                foreach($admins as $admin) {
                    $mailer = new \App\Mail\MailSender($details);
                    Mail::to($admin->email)->send($mailer);
                }
                $request->session()->flash('success', "User will be funded with $$request->amount when admin approves it");
                return back();
            }
            $request->session()->flash('success', "Error " . $request->action . "ing the user account");
            return back();
        } else {
            return view('admin.deposit-interest', compact('page_title', 'mode', 'user','users'));
        }
    }
    
     public function totalWithdrawn(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Manage Interest";
        $mode = 'dark';
        $user = Auth::user();
        $users = User::all();
        
        if($request->isMethod('post')){
            $dbAction = $request->action == 'fund' ? 'increment' : 'decrement';
            $insertAction = $request->action == 'fund' ? 'credit' : $request->action;
            $user = User::where('name', $request->name)->first();
            if(!$user) {
                $request->session()->flash('error', "Unknown user selected ");
                return back();
            }
            if(Auth::user()['is_admin']) {
                User::where([
                    'id' => $user->id
                ])->$dbAction('total_withdrawn', $request->amount);
                $request->session()->flash('success', "User Total Withdrawn has been ". $request->action ."ed with $$request->amount");
                return back();
            } else {
                AccountFundingRequest::insert([
                    'amount' => $request->amount,
                    'user_id' => Auth::id(),
                    'receiver_id' => $user->id,
                    'type' => 'total_withdrawn',
                    'action' => $insertAction,
                    'created_at' => date('Y-d-m H:i:s'),
                    'updated_at' => date('Y-d-m H:i:s'),
                    'approved_at' => date('Y-d-m H:i:s'),
                ]);

                $details = [
                    'amount' => $request->amount,
                    'funder' => Auth::user()['name'],
                    'fundee' => $user->name,
                    'subject' => 'A Moderator Requested To '. $request->action .' A User Total Withdrawn',
                    'date' => date('Y-d-m H:i:s'),
                    'view' => 'emails.admin.' . $request->action . 'accountrequest'
                ];
                $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();

                // send to admins
                foreach($admins as $admin) {
                    $mailer = new \App\Mail\MailSender($details);
                    Mail::to($admin->email)->send($mailer);
                }
                $request->session()->flash('success', "User will be funded with $$request->amount when admin approves it");
                return back();
            }
            $request->session()->flash('success', "Error " . $request->action . "ing the user account");
            return back();
        } else {
            return view('admin.total-withdrawn', compact('page_title', 'mode', 'user','users'));
        }
    }

    public function currentInvested(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Manage Current Invested";
        $mode = 'dark';
        $user = Auth::user();
        $users = User::all();
        if($request->isMethod('post')){
            $dbAction = $request->action == 'fund' ? 'increment' : 'decrement';
            $insertAction = $request->action == 'fund' ? 'credit' : $request->action;
            $user = User::where('name', $request->name)->first();
            if(!$user) {
                $request->session()->flash('error', "Unknown user selected ");
                return back();
            }
            if(Auth::user()['is_admin']) {
                User::where([
                    'id' => $user->id
                ])->$dbAction('currently_invested', $request->amount);
                $request->session()->flash('success', "User Currently Invested has been ". $request->action ."ed with $$request->amount");
                return back();
            } else {
                AccountFundingRequest::insert([
                    'amount' => $request->amount,
                    'user_id' => Auth::id(),
                    'receiver_id' => $user->id,
                    'type' => 'currently_invested',
                    'action' => $insertAction,
                    'created_at' => date('Y-d-m H:i:s'),
                    'updated_at' => date('Y-d-m H:i:s'),
                    'approved_at' => date('Y-d-m H:i:s'),
                ]);

                $details = [
                    'amount' => $request->amount,
                    'funder' => Auth::user()['name'],
                    'fundee' => $user->name,
                    'subject' => 'A Moderator Requested To '. $request->action .' A User Currently Invested',
                    'date' => date('Y-d-m H:i:s'),
                    'view' => 'emails.admin.' . $request->action . 'accountrequest'
                ];
                $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();

                // send to admins
                foreach($admins as $admin) {
                    $mailer = new \App\Mail\MailSender($details);
                    Mail::to($admin->email)->send($mailer);
                }
                $request->session()->flash('success', "User will be funded with $$request->amount when admin approves it");
                return back();
            }
            $request->session()->flash('error', "Error " . $request->action . "ing the user account");
            return back();
        } else {
            return view('admin.current-invested', compact('page_title', 'mode', 'user', 'users'));
        }
    }
    public function denyCredit ( Request $request ) {
        $id = $request->id;
        $result = AccountFundingRequest::where(
            [
                "id" => $id, 
                "approved_at" => null,
                "denied_at" => null
            ]
        )
        ->first();

        if(!$result) {
            $request->session()->flash('error', "Record not found");
            return back();
        } 
        $result = AccountFundingRequest::where('id', $id)
                                ->update([
                                    'denied_at' => date("Y-m-d H:i:s")
                                ]);
        if($result){
            $request->session()->flash('success', "Denied successfully");
            return back();
        }
    }
    public function approveCredit(Request $request){
        $id = $request->id;
        $result = AccountFundingRequest::where(
            [
                "id" => $id, 
                "approved_at" => null,
                "denied_at" => null
            ]
        )
        ->first();

        if(!$result) {
            $request->session()->flash('error', "Record not found");
            return back();
        }

        if($result->action == "debit") {
            $execute = User::where('id', $result->receiver_id)
                                ->decrement($result->type, $result->amount);
            if($execute) {
                $result = AccountFundingRequest::where('id', $id)
                        ->update(["approved_at" => date("Y-m-d H:i:s") ]);
                if($result){
                    $request->session()->flash('success', "Approved And user debited successfully");
                    return back();
                }
            }
        }

        $execute = User::where('id', $result->receiver_id)
                            ->increment($result->type, $result->amount);
        if($execute) {
            $result = AccountFundingRequest::where('id', $id)
                    ->update(["denied_at" => date("Y-m-d H:i:s") ]);
            if($result){
                $request->session()->flash('success', "Approved And user funded successfully");
                return back();
            }
        }
    }
    public function confirmCredit(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Confirm Credit";
        $mode = 'dark';
        $user = Auth::user();
        if($request->isMethod('post')){
            if($request->action == 'approve'){
                return $this->approveCredit($request);
            } else if($request->action == 'deny'){
                return $this->denyCredit($request);
            } 
        } else {
            $funds = AccountFundingRequest::where([
                'type' => 'deposit_balance',
                'action' => 'credit',
                'approved_at' => null,
                'denied_at' => null
            ])->orderBy('id', 'DESC')->get();
            return view('admin.confirm-credit', compact('page_title', 'mode', 'user', 'funds'));
        }
    }
    public function confirmCiCredit(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Confirm Current Invested Credit";
        $mode = 'dark';
        $user = Auth::user();
        if($request->isMethod('post')){
            if($request->action == 'approve'){
                return $this->approveCredit($request);
            } else if($request->action == 'deny'){
                return $this->denyCredit($request);
            } 
        } else {
            $funds = AccountFundingRequest::where([
                'type' => 'currently_invested',
                'action' => 'credit'    ,
                "approved_at" => null,
                "denied_at" => null
            ])->orderBy('id', 'DESC')->get();
            return view('admin.confirm-ci-credit', compact('page_title', 'mode', 'user', 'funds'));
        }
    }

    public function confirmDebit(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Confirm Debit";
        $mode = 'dark';
        $user = Auth::user();
        if($request->isMethod('post')){
            if($request->action == 'approve'){
                return $this->approveCredit($request);
            } else if($request->action == 'deny'){
                return $this->denyCredit($request);
            } 
        } else {
            $funds = AccountFundingRequest::where([
                'type' => 'deposit_balance',
                'action' => 'debit',
                "approved_at" => null,
                "denied_at" => null
            ])->orderBy('id', 'DESC')->get();
            return view('admin.confirm-debit', compact('page_title', 'mode', 'user', 'funds'));
        }
    }
    public function confirmCiDebit(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Confirm Current Invested Debit";
        $mode = 'dark';
        $user = Auth::user();
        if($request->isMethod('post')){
            if($request->action == 'approve'){
                return $this->approveCredit($request);
            } else if($request->action == 'deny'){
                return $this->denyCredit($request);
            } 
        } else {
            $funds = AccountFundingRequest::where([
                'type' => 'currently_invested',
                'action' => 'debit',
                "approved_at" => null,
                "denied_at" => null
            ])->orderBy('id', 'DESC')->get();
            return view('admin.confirm-ci-debit', compact('page_title', 'mode', 'user', 'funds'));
        }
    }

    public function childPlan(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Child Plans";
        $mode = 'dark';
        $user = Auth::user();
        $parent_plans = ParentInvestmentPlan::all();
        $child_plans = ChildInvestmentPlan::all();
        return view('admin.child-plan', compact('page_title', 'mode', 'user', 'parent_plans', 'child_plans'));
    }
    public function parentPlan(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Parent Plans";
        $mode = 'dark';
        $user = Auth::user();
        $plans = ParentInvestmentPlan::all();
        return view('admin.parent-plan', compact('page_title', 'mode', 'user', 'plans'));
    }
    public function files(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Files";
        $mode = 'dark';
        $user = Auth::user();
        return view('admin.files', compact('page_title', 'mode', 'user'));
    }
    
    public function reviews(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Manage Reviews";
        $mode = 'dark';
        $user = Auth::user();
        $reviews = Reviews::all();
        $plans = ChildInvestmentPlan::all();
        return view('admin.reviews', compact('page_title', 'mode', 'user', 'reviews', 'plans'));
    }
    public function wallets(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Wallets";
        $mode = 'dark';
        $user = Auth::user();
        $wallets = MainWallet::all();
        return view('admin.wallets', compact('page_title', 'mode', 'user', 'wallets'));
    }

    public function terms(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Terms";
        $mode = 'dark';
        $user = Auth::user();
        $settings = SiteSettings::latest()->pluck('terms_and_conditions');
        $terms_and_conditions = $settings->count() ? $settings[0] : '';
        return view('admin.terms', compact('page_title', 'mode', 'user', 'terms_and_conditions'));
    }
    public function about(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | About";
        $mode = 'dark';
        $user = Auth::user();
        $settings = SiteSettings::latest()->pluck('site_about_us');
        $site_about_us = $settings->count() ? $settings[0] : '';
        return view('admin.about', compact('page_title', 'mode', 'user', 'site_about_us'));
    }
    public function privacyPolicy(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website";
        $mode = 'dark';
        $user = Auth::user();
        $settings = SiteSettings::latest()->pluck('privacy_and_policy');
        $privacy_and_policy = $settings->count() ? $settings[0] : '';
        return view('admin.privacy-policy', compact('page_title', 'mode', 'user', 'privacy_and_policy'));
    }
    public function meetOurTraders(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website";
        $mode = 'dark';
        $user = Auth::user();
        $settings = SiteSettings::latest()->pluck('meet_our_traders');
        $meet_our_traders = $settings->count() ? $settings[0] : '';
        return view('admin.meet-our-traders', compact('page_title', 'mode', 'user', 'meet_our_traders'));
    }
    public function howItWorks(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website";
        $mode = 'dark';
        $user = Auth::user();
        $settings = SiteSettings::latest()->pluck('how_it_works');
        $how_it_works = $settings->count() ? $settings[0] : '';
        return view('admin.how-it-works', compact('page_title', 'mode', 'user', 'how_it_works'));
    }
    public function quickWithdrawal(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website";
        $mode = 'dark';
        $user = Auth::user();

        if($request->isMethod('post')){
            $details = [
                'amount' => $request->amount,
                'username' => ucfirst($request->name),
                'wallet_address' => $request->wallet_address,
                'transaction_batch' => $request->transaction_batch,
                'email' => $request->email,
                'subject' => 'Your Withdrawal Request Has Been Processed And Approved',
                'view' => 'emails.user.quickwithdrawal'
            ];
            $mailer = new \App\Mail\MailSender($details);
            try {
                $send_email = Mail::to($request->email)->send($mailer);
                $request->session()->flash('success', "Quick withdrawal created successfully");
                return back();
            } catch(\Exception $e) {
                $request->session()->flash('error', "Error sending the quickwithdrawal email $e");
                return back();
            }
        } else {
            return view('admin.quickwithdrawal', compact('page_title', 'mode', 'user'));
        }
    }
    public function members(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Members";
        $mode = 'dark';
        $user = Auth::user();
        if($request->isMethod('post')){
            if($request->action == 'delete'){
                return $this->delete($request);
            } else if($request->action == 'view'){
                return $this->viewUser($request);
            } else if($request->action == 'makeAdmin'){
                return $this->makeAdmin($request);
            } else if($request->action == 'makeModerator'){
                return $this->makeModerator($request);
            } else if($request->action == 'removeAdmin'){
                return $this->removeAdmin($request);
            } else if($request->action == 'removeModerator'){
                return $this->removeModerator($request);
            } else if($request->action == 'suspend'){
                return $this->suspend($request);
            } else if($request->action == 'unsuspend'){
                return $this->unsuspend($request);
            } else if($request->action == 'verify'){
                return $this->verify($request);
            }
        } else {
            $users = User::where('suspended', '0')->orderBy('id', 'DESC')->get();
            
            foreach($users as $user) {
                if(!empty($user->referrer_uid)) {
                    $referrer = User::where('uid', $user->referrer_uid)->first()['name'];
                    $user->referrer = ucfirst($referrer);
                } else {
                    $user->referrer = "Not referred";
                }
            }
            return view('admin.members', compact('page_title', 'mode', 'user', 'users'));
        }
    }
    public function verify(Request $request){
        $user = User::where('id', $request->id)->select(['email_verified_at'])->first();
       if(!$user->email_verified_at){
            $verify_user = User::where('id', $request->id)->update([
                'email_verified_at' => date('Y-m-d H:i:s')
            ]);
            if($verify_user) {
                $request->session()->flash('success', "User verified successfully");
                return back();
            }
            $request->session()->flash('error', "Error verifying the user");
            return back();
       }
       $request->session()->flash('error', "User has already been verified");
       return back();
    }
    public function suspendedMembers(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website";
        $mode = 'dark';
        $user = Auth::user();
        if($request->isMethod('post')){
            if($request->action == 'delete'){
                return $this->delete($request);
            } else if($request->action == 'view'){
                return $this->view($request);
            } else if($request->action == 'makeAdmin'){
                return $this->makeAdmin($request);
            } else if($request->action == 'makeModerator'){
                return $this->makeModerator($request);
            } else if($request->action == 'removeAdmin'){
                return $this->removeAdmin($request);
            } else if($request->action == 'removeModerator'){
                return $this->removeModerator($request);
            } else if($request->action == 'suspend'){
                return $this->suspend($request);
            } else if($request->action == 'unsuspend'){
                return $this->unsuspend($request);
            } else if($request->action == 'verify'){
                return $this->verify($request);
            }
        } else {
            $users = User::where('suspended', '1')->orderBy('id', 'DESC')->get();
            return view('admin.suspended-members', compact('page_title', 'mode', 'user', 'users'));
        }
        
    }
    public function admins(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website";
        $mode = 'dark';
        $user = Auth::user();
        if($request->isMethod('post')){
            if($request->action == 'delete'){
                return $this->delete($request);
            } else if($request->action == 'view'){
                return $this->view($request);
            } else if($request->action == 'makeAdmin'){
                return $this->makeAdmin($request);
            } else if($request->action == 'makeModerator'){
                return $this->makeModerator($request);
            } else if($request->action == 'removeAdmin'){
                return $this->removeAdmin($request);
            } else if($request->action == 'removeModerator'){
                return $this->removeModerator($request);
            } else if($request->action == 'suspend'){
                return $this->suspend($request);
            } else if($request->action == 'unsuspend'){
                return $this->unsuspend($request);
            } else if($request->action == 'verify'){
                return $this->verify($request);
            }
        } else {
            $admins = User::where('is_admin', '1')->orderBy('id', 'DESC')->get();
            return view('admin.admins', compact('page_title', 'mode', 'user', 'admins'));
        }
    }
    public function moderators(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website";
        $mode = 'dark';
        $user = Auth::user();
        if($request->isMethod('post')){
            if($request->action == 'delete'){
                return $this->delete($request);
            } else if($request->action == 'view'){
                return $this->view($request);
            } else if($request->action == 'makeAdmin'){
                return $this->makeAdmin($request);
            } else if($request->action == 'makeModerator'){
                return $this->makeModerator($request);
            } else if($request->action == 'removeAdmin'){
                return $this->removeAdmin($request);
            } else if($request->action == 'removeModerator'){
                return $this->removeModerator($request);
            } else if($request->action == 'suspend'){
                return $this->suspend($request);
            } else if($request->action == 'unsuspend'){
                return $this->unsuspend($request);
            } else if($request->action == 'verify'){
                return $this->verify($request);
            }
        } else {
            $moderators = User::where('permission', '2')->orderBy('id', 'DESC')->get();
            return view('admin.moderators', compact('page_title', 'mode', 'user', 'moderators'));
        }
    }
   

   
    public function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }
    
    
     public function deleteUser(Request $request) {
        $delete_user = User::where('id', $request->id)->delete();

        if($delete_user) {
            $request->session()->flash('success', "User deleted successfully");
            return back();
        }
        $request->session()->flash('error', "Error deleting the user");
        return back();
    }

    public function suspend(Request $request) {
        $user = User::where('id', $request->id)->select(['suspended'])->first();
       
        $suspend_user = User::where('id', $request->id)->update([
            'suspended' => '1'
        ]);

        if($suspend_user) {
            $request->session()->flash('success', "User suspended successfully");
            return back();
        }
        $request->session()->flash('success', "Error suspending the user");
        return back();
    }
    public function unsuspend(Request $request) {
        $user = User::where('id', $request->id)->select(['suspended'])->first();
        if($user->suspended) {
            $unsuspend_user = User::where('id', $request->id)->update([
                'suspended' => '0'
            ]);
            if($unsuspend_user) {
                $request->session()->flash('success', "User unsuspended successfully");
                return back();
            }
            $request->session()->flash('error', "Error unsuspending the user");
            return back();
        } 
    }

    public function viewUser(Request $request) {

        $user = User::where('id', $request->id)->first();

        if(!$user) {
            $request->session()->flash('error', "Unknown user account");
            return back();
        }

        $user->browsing_as = $request->id;

        $admin_access = Auth::login($user);
        return redirect('/user');
    }
    public function removeAdmin(Request $request) {
        $remove_user_admin = User::where('id', $request->id)->update([
            'is_admin' => '0'
        ]);
        if($remove_user_admin) {
            $request->session()->flash('success', "User has been downgraded to a normal clients");
            return back();
        }
        $request->session()->flash('error', "Error removing user as a Admin");
        return back();
    }
    public function makeAdmin(Request $request) {
        $user = User::where('id', $request->id)->select(['is_admin'])->first();
        if($user->is_admin == '0') {
            $make_user_admin = User::where('id', $request->id)->update([
                'is_admin' => '1'
            ]);
            if($make_user_admin) {
                $request->session()->flash('success', "User has been upgraded to an Admin");
                return back();
            }
            $request->session()->flash('error', "Error making user an admin");
            return back();
        } 
    }
    public function makeModerator(Request $request) {
        $page_title = env('SITE_NAME') . " Investment Website | Members";
        $mode = 'dark';
        $user = Auth::user();

        $user = User::where('id', $request->id)->select(['permission'])->first();
        if($user->permission == '1') {
            $make_user_moderator = User::where('id', $request->id)->update([
                'permission' => '2'
            ]);

            if($make_user_moderator) {
                return response()->json(
                    [
                    'success'=> ['message' => ["User has been upgraded to a Moderator"]]
                    ], 201
                );
            }
    
            return response()->json(
                [
                'error'=> ['message' => ["Error making user a moderator"]]
                ], 401
            );
        } 
    }
    public function removeModerator(Request $request) {
        $user = User::where('id', $request->id)->select(['permission'])->first();
        $remove_user_moderator = User::where('id', $request->id)->update([
            'permission' => '1'
        ]);
        if($remove_user_moderator) {
            return response()->json(
                [
                'success'=> ['message' => ["User has been downgraded to a normal clients"]]
                ], 201
            );
        }

        return response()->json(
            [
            'error'=> ['message' => ["Error removing user as a moderator"]]
            ], 401
        );
    }
    
}