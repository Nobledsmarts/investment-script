<?php

namespace App\Http\Controllers;

use App\Models\AccountFundingRequest;
use App\Models\Faq;
use App\Models\Transactions;
use App\Models\ChildInvestmentPlan;
use App\Models\MainWallet;
use App\Models\UserWallet;
use App\Models\Deposit;
use App\Models\Withdrawal;
use App\Models\Reviews;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\SiteSettings;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller {
    public function __construct() {
        SiteSettings::where('id', 1)->increment('visit_count', 1);
        $this->middleware('login', ['except' => ['index', 'news', 'plans', 'login', 'support', 'register', 'faqs', 'terms', 'meetOurTraders', 'howItWorks', 'privacyPolicy', 'aboutUs', 'forgotPass', 'verifyToken', 'changePass', 'affiliate', 'cryptocurrencyInvestments', 'retirementAndPension', 'pammAndMamAccount']]);
    }
    
    public function index(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website";
        $plans = ChildInvestmentPlan::all();
        $faqs = Faq::orderBy('priority', 'ASC')->get();
        $deposits = Deposit::where([
            'status' => 'accepted',
        ])->get();
        $withdrawals = Withdrawal::where([
            'status' => 'accepted',
        ])->get();
        SiteSettings::where('id', 1)->increment('visit_count', 1);
        $settings = SiteSettings::latest()->first();
        $reviews = Reviews::where('active', '1')->get();
        return view('visitor.index', compact('page_title', 'deposits', 'withdrawals', 'plans', 'faqs', 'settings', 'reviews'));
    }
    public function dashboard(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Dashboard";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $plans = ChildInvestmentPlan::all();
        $wallets = UserWallet::where('user_id', $user['id'])->get();
        $transactions = Transactions::where('user_id', $user['id'])->take(10)->get();
        $total_approved_deposits = Deposit::where([
            'user_id' => $user['id'],
            'status' => 'accepted'
        ])->count();
        $total_denied_deposits = Deposit::where([
            'user_id' => $user['id'],
            'status' => 'denied'
        ])->count();
        $total_pending_deposits = Deposit::where([
            'user_id' => $user['id'],
            'status' => 'pending'
        ])->count();
        $total_approved_withdrawals = Withdrawal::where([
            'user_id' => $user['id'],
            'status' => 'accepted'
        ])->count();
        $total_denied_withdrawals = Withdrawal::where([
            'user_id' => $user['id'],
            'status' => 'denied'
        ])->count();
        $total_pending_withdrawals = Withdrawal::where([
            'user_id' => $user['id'],
            'status' => 'pending'
        ])->count();
        $recent_deposits = Deposit::where([
            
            'status' => 'accepted'
            ])->orderBy('id', 'desc')->take(10)->get();
        $reviews = Reviews::where('active', '1')->get();
        $active_deposits = Deposit::where([
            'user_id' => $user['id'],
            'running' => '1',
            ['expires_at', '!=', null]
        ])->get();
        $total_deposits = Deposit::where([
            'user_id' => $user['id'],
        ])->count();
        $total_withdrawals = Withdrawal::where([
            'user_id' => $user['id'],
        ])->count();

        $account_balance = $user['deposit_balance'] + $user['deposit_interest'] + $user['referral_bonus'];
        $deposit_interest = $user['deposit_interest'];
        $currently_invested = $user['currently_invested'];
        $referral_bonus = $user['referral_bonus'];
        $total_withdrawn = $user['total_withdrawn'];

        $total_account = $account_balance + $deposit_interest + $currently_invested + $referral_bonus + $total_withdrawn;
        $account_balance_percent = empty(intval($account_balance)) ?  0 : number_format((($account_balance / $total_account) * 100), 1);
        $deposit_interest_percent = empty(intval($deposit_interest)) ?  0 : number_format((($deposit_interest / $total_account) * 100), 1);
        $currently_invested_percent = empty(intval($currently_invested)) ?  0 : number_format((($currently_invested / $total_account) * 100), 1);
        $referral_bonus_percent = empty(intval($referral_bonus)) ?  0 : number_format((($referral_bonus / $total_account) * 100), 1);
        $total_withdrawn_percent = empty(intval($total_withdrawn)) ?  0 : number_format((($total_withdrawn / $total_account) * 100), 1);
        
        return view('user.index', compact('total_withdrawn_percent', 'referral_bonus_percent', 'currently_invested_percent', 'deposit_interest_percent', 'account_balance_percent', 'page_title', 'total_deposits', 'total_withdrawals', 'total_denied_deposits', 'total_approved_deposits', 'total_pending_deposits', 'total_denied_withdrawals', 'total_pending_withdrawals', 'total_approved_withdrawals', 'recent_deposits', 'mode', 'user', 'transactions', 'plans', 'wallets', 'reviews', 'active_deposits'));
    }
    public function deposit(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Deposit";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $plans = ChildInvestmentPlan::all();
        $wallets = UserWallet::where('user_id', $user['id'])->get();
        return view('user.deposit', compact('page_title', 'mode', 'user', 'plans', 'wallets'));
    }
    public function activeDeposits(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Deposit History";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        if($request->isMethod('post')){
            $deposit =  new Deposit();
            $deposit_id = $request->id;
            $is_valid_deposit = $deposit->where('id', $deposit_id)->first();
            if(!$is_valid_deposit) {
                $request->session()->flash('error', 'Investment not found');
                return back();
            }
            if($is_valid_deposit->running == '0') {
                $request->session()->flash('error', 'Investment already paused');
                return back();
            }

            $pause_deposit = $deposit->where('id', $deposit_id)->update([
                'running' => '0',
            ]);
            
            if($pause_deposit){
                $request->session()->flash('success', 'Investment paused successfully');
                return back();
            }
        }
        else {
            $deposits = Deposit::where([
                'user_id' => $user['id'],
                'status' => 'accepted',
                'running' => '1'
            ])->orderBy('id', 'DESC')->get();
            return view('user.active-deposits', compact('page_title', 'mode', 'user', 'deposits'));
        }
    }
    public function inactiveDeposits(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Deposit History";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        if($request->isMethod('post')){
            $deposit =  new Deposit();
            $deposit_id = $request->id;
            $is_valid_deposit = $deposit->where('id', $deposit_id)->first();
            if(!$is_valid_deposit) {
                $request->session()->flash('error', 'Investment not found');
                return back();
            }
            if($is_valid_deposit->running == '1') {
                $request->session()->flash('error', 'Investment already running');
                return back();
            }

            $play_deposit = $deposit->where('id', $deposit_id)->update([
                'running' => '1',
            ]);
            
            if($play_deposit){
                $request->session()->flash('success', 'Investment has started running');
                return back();
            }
        } else {
            $deposits = Deposit::where([
                'user_id' => $user['id'],
                'status' => 'accepted',
                'running' => '0',
            ])->get();
            return view('user.inactive-deposits', compact('page_title', 'mode', 'user', 'deposits'));
        }
    }
    public function deposits(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Deposit History";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $approved_deposits = Deposit::where([
            'user_id' => $user['id'],
            'status' => 'accepted',
        ])->get();
        $denied_deposits = Deposit::where([
            'user_id' => $user['id'],
            'status' => 'denied',
        ])->get();
        $pending_deposits = Deposit::where([
            'user_id' => $user['id'],
            'status' => 'pending',
        ])->get();
        $deposits = Deposit::where('user_id', $user['id'])->get();
        return view('user.deposits', compact('page_title', 'mode', 'user', 'denied_deposits', 'pending_deposits', 'approved_deposits'));
    }

    public function wallets(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Deposit History";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $user_wallets = UserWallet::where('user_id', Auth::id())->get();
        $user_owned_wallet_ids = [];
        foreach($user_wallets as $wallet) {
            array_push($user_owned_wallet_ids, $wallet->main_wallet_id);
        }
        $main_wallets = MainWallet::whereNotIn('id', $user_owned_wallet_ids)->get();
        return view('user.wallets', compact('page_title', 'mode', 'user', 'main_wallets', 'user_wallets'));
    }

    public function reinvest(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Reinvest";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $plans = ChildInvestmentPlan::all();
        $wallets = UserWallet::where('user_id', $user['id'])->get();
        return view('user.reinvest', compact('page_title', 'mode', 'user', 'plans', 'wallets'));
    }

    public function reinvestments(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Reinvestment History";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $reinvestments = Deposit::where([
            ['reinvestment', '=', 1],
            ['user_id', '=', $user['id']]
        ])->get();
        return view('user.reinvestments', compact('page_title', 'mode', 'user', 'reinvestments'));
    }

    public function withdrawal(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Withdrawal";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $wallets = UserWallet::where('user_id', $user['id'])->get();
        return view('user.withdrawal', compact('page_title', 'mode', 'user', 'wallets'));
    }

    public function withdrawals(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Withdrawal History";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $pending_withdrawals = Withdrawal::where([
            'user_id' => $user['id'],
            'status' => 'pending',
        ])->get();
        $approved_withdrawals = Withdrawal::where([
            'user_id' => $user['id'],
            'status' => 'accepted',
        ])->get();
        $denied_withdrawals = Withdrawal::where([
            'user_id' => $user['id'],
            'status' => 'denied',
        ])->get();
        return view('user.withdrawals', compact('page_title', 'mode', 'user', 'pending_withdrawals', 'approved_withdrawals', 'denied_withdrawals'));
    }

    public function transactions(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Transactions";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $transactions = Transactions::where('user_id', $user['id'])->orderBy('id', 'DESC')->get();
        return view('user.transactions', compact('page_title', 'mode', 'user', 'transactions'));
    }

    public function referrals(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Referrals";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $referrals = User::where('referrer_uid', $user['uid'])->get();
        return view('user.referrals', compact('page_title', 'mode', 'user', 'referrals'));
    }

    public function security(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Dashboard";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        return view('user.security', compact('page_title', 'mode', 'user'));
    }

    public function profile(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Dashboard";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $transactions = Transactions::where('user_id', $user['id'])->get();
        $referrals = User::where('referrer', $user['name'])->get();
        return view('user.profile', compact('page_title', 'mode', 'user', 'transactions', 'referrals'));
    }

    public function login(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website";
        $settings = SiteSettings::latest()->first();
        return view('visitor.login', compact('page_title', 'settings'));
    }
    public function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }
    public function register(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website";
        $settings = SiteSettings::latest()->first();
        return view('visitor.register', compact('page_title', 'settings'));
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
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'approved_at' => date('Y-m-d H:i:s'),
                ]);

                $details = [
                    'email' => $user->email,
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
                $request->session()->flash('success', "User will be " . $request->action .  "ed with $$request->amount when admin approves it");
                return back();
            }
            $request->session()->flash('success', "Error " . $request->action . "ing the user account");
            return back();
        } else {
            return view('user.referral-bonus', compact('page_title', 'mode', 'user', 'users'));
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
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'approved_at' => date('Y-m-d H:i:s'),
                ]);

                $details = [
                    'email' => $user->email,
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
                $request->session()->flash('success', "User will be " . $request->action . "ed with $$request->amount when admin approves it");
                return back();
            }
            $request->session()->flash('success', "Error " . $request->action . "ing the user account");
            return back();
        } else {
            return view('user.wallet-balance', compact('page_title', 'mode', 'user','users'));
        }
    }

    public function currentInvested(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Manage Current Invested";
        $mode = 'dark';
        $user = Auth::user();
        $users = User::all();
        if($request->isMethod('post')){
            // dd($request->action);
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
                // dd($request->amount);
                AccountFundingRequest::insert([
                    'amount' => $request->amount,
                    'user_id' => Auth::id(),
                    'receiver_id' => $user->id,
                    'type' => 'currently_invested',
                    'action' => $insertAction,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'approved_at' => date('Y-m-d H:i:s'),
                ]);

                $details = [
                    'email' => $user->email,
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
                $request->session()->flash('success', "User will be " . $request->action . "ed with $$request->amount when admin approves it");
                return back();
            }
            $request->session()->flash('success', "Error " . $request->action . "ing the user account");
            return back();
        } else {
            return view('user.current-invested', compact('page_title', 'mode', 'user', 'users'));
        }
    }
    public function aboutUs(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | About Us";
        $settings = SiteSettings::latest()->first();
        $site_about_us = $settings['site_about_us'];
        return view('visitor.about-us', compact('site_about_us', 'page_title', 'settings'));
    }

    public function retirementAndPension(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Retirement And Pension";
        $settings = SiteSettings::latest()->first();
        return view('visitor.retirement-and-pension', compact('page_title', 'settings'));
    }

    public function pammAndMamAccount(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Pamm And Mam Account";
        $settings = SiteSettings::latest()->first();
        return view('visitor.pamm-and-mam-account', compact('page_title', 'settings'));
    }

    public function affiliate(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Affiliate Programme";
        $settings = SiteSettings::latest()->first();
        return view('visitor.affiliate', compact('page_title', 'settings'));
    }

    public function cryptocurrencyInvestments(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Cryptocurrency Investments";
        $settings = SiteSettings::latest()->first();
        return view('visitor.cryptocurrency-investments', compact('page_title', 'settings'));
    }
    
    public function terms(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Terms And Condition";
        $settings = SiteSettings::latest()->first();
        $terms_and_conditions = $settings['terms_and_conditions'];
        return view('visitor.terms', compact('terms_and_conditions', 'page_title', 'settings'));
    }
    
    public function support(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Support";
        $settings = SiteSettings::latest()->first();
        return view('visitor.support', compact('page_title', 'settings'));
    }
    public function meetOurTraders(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Meet Our Traders";
        $settings = SiteSettings::latest()->first();
        $meet_our_traders = $settings['meet_our_traders'];
        return view('visitor.meet-our-traders', compact('meet_our_traders', 'page_title', 'settings'));
    }
    public function howItWorks(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Meet Our Traders";
        $settings = SiteSettings::latest()->first();
        $how_it_works = $settings['how_it_works'];
        return view('visitor.how-it-works', compact('how_it_works', 'page_title', 'settings'));
    }
     public function faqs(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Frequently Asked Questions";
        $settings = SiteSettings::latest()->first();
        $faqs = Faq::orderBy('priority', 'DESC')->get();
        return view('visitor.faqs', compact('faqs', 'page_title', 'settings'));
    }
    
     public function privacyPolicy(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Privacy And Policy";
        $settings = SiteSettings::latest()->first();
        $privacy_and_policy = $settings['privacy_and_policy'];
        return view('visitor.privacy-and-policy', compact('privacy_and_policy', 'page_title', 'settings'));
    }
    public function quickWithdrawal(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Quick Withdrawal";
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
                $request->session()->flash('error', "Error sending the quickwithdrawal email");
                return back();
            }
        }
        return view('user.quickwithdrawal', compact('page_title', 'mode', 'user'));
    }
    public function forgotPass(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Forgot Password";
        SiteSettings::where('id', 1)->increment('visit_count', 1);
        $settings = SiteSettings::latest()->first();
        $main_wallets = MainWallet::all();
        if($request->isMethod('post')){
            $validated = $request->validate([
                'email' => 'required|email'
            ]);
            $token =  rand(100000, 999999);
            $user = User::where('email', $request->email)->first();
            if(!$user) {
                $request->session()->flash('error', "$request->email is not a registered email");
                return back();
            }
            // send email
            $details = [
                'token' => $token,
                'username' => $user->name,
                'subject' => 'Verify Email To Proceed To Password Reset',
                'date' => date("Y-m-d H:i:s"),
                'view' => 'emails.user.passwordreset'
            ];
            $mailer = new \App\Mail\MailSender($details);
            try{
                Mail::to($request->email)->send($mailer);
        
                session(['verification_token' => $token]);
                session(['email' => $request->email]);
                return redirect('/verify-token')->with('success', 'Verification code successfully sent');
            } catch(\Exception $e){
                $request->session()->flash('error', "Unable to send verification token to $request->email");
                return back();
            }
        }
        return view('visitor.forgotpass', compact('page_title', 'settings', 'main_wallets'));
    }
    public function changePass(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Change Password";
        SiteSettings::where('id', 1)->increment('visit_count', 1);
        $settings = SiteSettings::latest()->first();
        $main_wallets = MainWallet::all();
        if(!session('email')) return redirect('/login');
        if($request->isMethod('post')){
            $validated = $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
                'repassword' => 'required|same:password'
            ]);
            $user = User::where('email', $request->email)->first();
            if(!$user) {
                $request->session()->flash('error', "$request->email is not a registered email");
                return back();
            }

            $update_password = User::where('email', $request->email)->update(
                [
                    'password' => Hash::make($request->password)
                ]
            );
    
            if($update_password) {
                $request->session()->flash('success', "password has been reset successfully");
                return back();
            }
        } else {
            return view('visitor.changepass', compact('page_title', 'settings', 'main_wallets'));
        }
    }
    public function plans(Request $request){
        $plans = ChildInvestmentPlan::all();
        $page_title = env('SITE_NAME') . " Investment Website | Investment Plans";
        $plans = ChildInvestmentPlan::all();
        $settings = SiteSettings::latest()->first();
        return view('visitor.plans', compact('page_title', 'plans', 'settings'));
    }
     public function news(Request $request){
        $page_title = env('SITE_NAME') . " Investment Website | Crypto News";
        $settings = SiteSettings::latest()->first();
        return view('visitor.news', compact('page_title', 'settings'));
    }
    public function verifyToken(Request $request){
        $page_title = env('SITE_NAME') . "Investment Website | Verify Token";
        SiteSettings::where('id', 1)->increment('visit_count', 1);
        $settings = SiteSettings::latest()->first();
        $main_wallets = MainWallet::all();
        if(!session('email')) return redirect('/login');
        if($request->isMethod('post')){
            $token = session('verification_token');
            $email = session('email');

            if($request->token != $token) {
                $request->session()->flash('error', "invalid code or expired code");
                return back();
            } elseif($request->email != $email){
                $request->session()->flash('error', "invalid email address");
                return back();
            } else {
                return redirect('/change-pass')->with('success', 'Token Verified');
            }
        } else {
            return view('visitor.verify-token', compact('page_title', 'settings', 'main_wallets'));
        }
    }
}