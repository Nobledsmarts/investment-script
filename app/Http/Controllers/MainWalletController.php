<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMainWalletRequest;
use App\Models\MainWallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainWalletController extends Controller {
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, MainWallet $mainWallet) {
        $page_title = env('SITE_NAME') . " Investment Website | Wallets";
        $mode = 'dark';
        $user = Auth::user();
        
        if($request->isMethod('post')) {
            if(empty($request->id)){
                return $this->save($request);
            } else {
                if($request->action == 'delete'){
                    return $this->delete($request);
                } elseif($request->action == 'activate'){
                    return $this->activate($request);
                } else if($request->action == 'deactivate'){
                    return $this->deactivate($request);
                } else {
                    return $this->update($request);
                }
            }
        } else {
            $wallets = MainWallet::all();
            return view('admin.wallets', compact('page_title', 'mode', 'user', 'wallets'));
        }
    }
    public function save($request){
        $page_title = env('SITE_NAME') . " Investment Website | Wallets";
        $mode = 'dark';
        $user = Auth::user();
        $validated = $request->validate([
            'currency' => 'bail|required|unique:main_wallets,currency,except,id', 
            'currency_symbol' => 'bail|required|unique:main_wallets,currency_symbol,except,id',
            'currency_address' => 'required',
        ]);
        $mainWallet = new MainWallet();
        $mainWallet->currency = $request->currency;
        $mainWallet->currency_symbol = $request->currency_symbol;
        $mainWallet->currency_address = $request->currency_address;
        if(!empty($request->has_memo)) {
            $mainWallet->has_memo = $request->has_memo;
            $mainWallet->memo_token = $request->memo_token;
        }
        $store_mainWallet = $mainWallet->save();

        $last_id = MainWallet::latest()->first();

        if($store_mainWallet) {
            $wallets = MainWallet::all();
            $request->session()->flash('success', "Main Wallet created successfully");
            return view('admin.wallets', compact('page_title', 'mode', 'user', 'wallets'));
        }
        $request->session()->flash('error', "Error creating the wallet");
        $wallets = MainWallet::all();
        return view('admin.wallets', compact('page_title', 'mode', 'user', 'wallets'));
    }
    public function update($request) {
        $page_title = env('SITE_NAME') . " Investment Website | Wallets";
        $mode = 'dark';
        $user = Auth::user();
        $update_adminWallet = MainWallet::where('id', $request->id)->update([
            'currency' => $request->currency,
            'currency_symbol' => $request->currency_symbol,
            'memo_token' => $request->memo_token,
            'currency_address' => $request->currency_address,
            'has_memo' => $request->has_memo ? 1 : 0
        ]);
        if($update_adminWallet) {
            $wallets = MainWallet::all();
            $request->session()->flash('success', "Main Wallet updated successfully");
            return view('admin.wallets', compact('page_title', 'mode', 'user', 'wallets'));
        }
        $request->session()->flash('error', "Main Wallet not updated");
        $wallets = MainWallet::all();
        return view('admin.wallets', compact('page_title', 'mode', 'user', 'wallets'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MainWallet  $mainWallet
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainWallet $mainWallet, Request $request) {
        $result = MainWallet::where('id', $request->id)->delete();
        if($result){
            return response()->json(
                [
                'success' => ['message' => ["Wallet deleted successfully"]]
                ], 201
            );
        } else {
            return response()->json(
                [
                'errors' => ['message' => ["Something went wrong"]]
                ], 403
            );
        }
    }

    public function delete($request) {
        $page_title = env('SITE_NAME') . " Investment Website | Wallets";
        $mode = 'dark';
        $user = Auth::user();

        $wallet = MainWallet::where('id', $request->id)->first();
        $wallets = MainWallet::all();

        if($wallet) {
            $delete_permanently = MainWallet::where('id', $request->id)->forceDelete();

            if($delete_permanently) {
                $wallets = MainWallet::all();
                $request->session()->flash('success', "Wallet permanently deleted");
                return view('admin.wallets', compact('page_title', 'mode', 'user', 'wallets'));
            }
            $request->session()->flash('error', "Error deleting wallet");
            return view('admin.wallets', compact('page_title', 'mode', 'user', 'wallets'));
        }
        $request->session()->flash('error', "Unkflashn wallet");
        return view('admin.wallets', compact('page_title', 'mode', 'user', 'wallets'));
    }

    public function recover(Request $request) {
        $wallet = MainWallet::onlyTrashed()->where('id', $request->id)->first();
        if($wallet) {
            $recover_wallet = MainWallet::where('id', $request->id)->restore();

            if($recover_wallet) {
                return response()->json(
                    [
                        'success' => ['message' => 'Wallet restored']
                    ], 201
                );
            }

            return response()->json(
                [
                    'errors' => ['message' => 'Error restoring wallet']
                ], 401
            );
        }

        return response()->json(
            [
                'error' => ['message' => 'Unkflashn wallet']
            ], 401
        );
    }

    /**
     * Deactivate the specified resource from storage.
     *
     * @param  \App\Models\MainWallet  $mainWallet
     * @return \Illuminate\Http\Response
     */
    public function deactivate($request) {
        $page_title = env('SITE_NAME') . " Investment Website | Wallets";
        $mode = 'dark';
        $user = Auth::user();
        $mainWallet = new MainWallet();
        $wallets = MainWallet::all();

        $result = $mainWallet->where('id', $request->id)->update(['active' => 0]);
        if($result){
            $wallets = MainWallet::all();
            $request->session()->flash('success', "Wallet deactivated successfully");
            return view('admin.wallets', compact('page_title', 'mode', 'user', 'wallets'));
        } else {
            $request->session()->flash('error', "Something went wrong");
            return view('admin.wallets', compact('page_title', 'mode', 'user', 'wallets'));
        }
    }

    /**
     * Activate the specified resource from storage.
     *
     * @param  \App\Models\MainWallet  $mainWallet
     * @return \Illuminate\Http\Response
     */
    public function activate($request) {
        $page_title = env('SITE_NAME') . " Investment Website | Wallets";
        $mode = 'dark';
        $user = Auth::user();
        $wallets = MainWallet::all();
        $mainWallet = new MainWallet();
        $result = $mainWallet->where('id', $request->id)->update(['active' => 1]);
        if($result){
            $wallets = MainWallet::all();
            $request->session()->flash('success', "Wallet activated successfully");
            return view('admin.wallets', compact('page_title', 'mode', 'user', 'wallets'));
        } else {
            $request->session()->flash('error', "Something went wrong");
            return view('admin.wallets', compact('page_title', 'mode', 'user', 'wallets'));
        }
    }
}
