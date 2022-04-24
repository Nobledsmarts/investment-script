<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserWalletRequest;
use App\Models\MainWallet;
use App\Models\User;
use App\Models\UserWallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserWalletController extends Controller {
    public function index(Request $request) {
        $page_title = env('SITE_NAME') . " Investment Website | Deposit History";
        $mode = 'dark';
        $user = Auth::user();
        if($user->browsing_as){
            $user = User::find($user->browsing_as);
        }
        $user_owned_wallet_ids = [];
        $user_wallets = UserWallet::where('user_id', Auth::id())->get();
        foreach($user_wallets as $wallet) {
            array_push($user_owned_wallet_ids, $wallet->main_wallet_id);
        }
        
        if($request->isMethod('post')){
            if(empty($request->id)){
                return $this->save($request);
            } else {
                return $this->update($request);
            }
        } else {
            $main_wallets = MainWallet::whereNotIn('id', $user_owned_wallet_ids)->get();
            return view('user.wallets', compact('page_title', 'mode', 'user', 'main_wallets', 'user_wallets'));
        }
        
    }
    public function save($request){
        $userWallet = new UserWallet();
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

        $validated = $request->validate([
            'currency_address' => 'required',
            'memo_token' => 'required_if:has_memo,true'
        ]);
        
        $check_for_match = UserWallet::where(['user_id' => Auth::id(), 'main_wallet_id' => $request->main_wallet_id])->first();
        
        if($check_for_match) {
            $request->session()->flash('error', "The choosen wallet already exists");
            $main_wallets = MainWallet::whereNotIn('id', $user_owned_wallet_ids)->get();
            return view('user.wallets', compact('page_title', 'mode', 'user', 'main_wallets', 'user_wallets'));
        }

        $userWallet->currency_address = $request->currency_address;
        $userWallet->main_wallet_id = $request->main_wallet_id;
        $userWallet->user_id = Auth::id();
        if(!empty($request->has_memo)) {
            $userWallet->has_memo = $request->has_memo;
            $userWallet->memo_token = $request->memo_token;
        }
        $store_userWallet = $userWallet->save();

        $last_id = UserWallet::latest()->first();

        if($store_userWallet) {
            $user_wallets = UserWallet::where('user_id', Auth::id())->get();
            $user_owned_wallet_ids = [];
            foreach($user_wallets as $wallet) {
                array_push($user_owned_wallet_ids, $wallet->main_wallet_id);
            }
            $request->session()->flash('success', "Your wallet was created successfully");
            $main_wallets = MainWallet::whereNotIn('id', $user_owned_wallet_ids)->get();
            return view('user.wallets', compact('page_title', 'mode', 'user', 'main_wallets', 'user_wallets'));
        }
        $request->session()->flash('error', "Error creating the wallet");
        $main_wallets = MainWallet::whereNotIn('id', $user_owned_wallet_ids)->get();
        return view('user.wallets', compact('page_title', 'mode', 'user', 'main_wallets', 'user_wallets'));
    }
    public function update(Request $request) {
        $userWallet = new UserWallet();
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

        $update_userWallet = $userWallet->where('id', $request->id)->update([
            'memo_token' => $request->memo_token,
            'currency_address' => $request->currency_address,
            'has_memo' => $request->has_memo ? 1 : 0
        ]);

        if($update_userWallet) {
            $user_wallets = UserWallet::where('user_id', Auth::id())->get();
            $user_owned_wallet_ids = [];
            foreach($user_wallets as $wallet) {
                array_push($user_owned_wallet_ids, $wallet->main_wallet_id);
            }
            $request->session()->flash('success', "Your wallet was updated successfully");
            $main_wallets = MainWallet::whereNotIn('id', $user_owned_wallet_ids)->get();
            return view('user.wallets', compact('page_title', 'mode', 'user', 'main_wallets', 'user_wallets'));
        }
        $request->session()->flash('success', "Wallet not updated");
        $main_wallets = MainWallet::whereNotIn('id', $user_owned_wallet_ids)->get();
        return view('user.wallets', compact('page_title', 'mode', 'user', 'main_wallets', 'user_wallets'));
    }
}
