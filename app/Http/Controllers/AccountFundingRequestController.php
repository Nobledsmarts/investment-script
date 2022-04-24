<?php

namespace App\Http\Controllers;

use App\Models\AccountFundingRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AccountFundingRequestController extends Controller {
    public function fundAccount(Request $request) {
        $user = User::where('name', $request->name)->first();
        if(!$user) {
            return response()->json(
                [
                'errors'=> ['message' => ["Unknown user selected "]]
                ], 403
            );
        }

        if(Auth::user()['is_admin']) {
            User::where([
                'id' => $user->id
            ])->increment('deposit_balance', $request->amount);
            return response()->json(
                [
                'success'=> ['message' => ["User Deposit balance has been funded with $$request->amount"]]
                ], 201
            );
        } else {
            AccountFundingRequest::insert([
                'amount' => $request->amount,
                'user_id' => Auth::id(),
                'receiver_id' => $user->id,
                'type' => 'deposit_balance',
                'action' => 'credit',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'approved_at' => date('Y-m-d H:i:s'),
            ]);

            $details = [
                'amount' => $request->amount,
                'funder' => Auth::user()['name'],
                'fundee' => $user->name,
                'subject' => 'A Moderator Requested To Fund A User Deposit Balance',
                'date' => date('Y-m-d H:i:s'),
                'email' => $user->email,
                'view' => 'emails.admin.fundaccountrequest'
            ];
            $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();

            // send to admins
            foreach($admins as $admin) {
                $mailer = new \App\Mail\MailSender($details);
                Mail::to($admin->email)->send($mailer);
            }


            return response()->json(
                [
                'success'=> ['message' => ["User will be funded with $$request->amount when admin approves it"]]
                ], 201
            );

            // send email to super admins
        }

        return response()->json(
            [
            'errors'=> ['message' => ["Error funding the user account"]]
            ], 403
        );


    }

    public function debitAccount(Request $request) {
        $user = User::where('name', $request->name)->first();
        if(!$user) {
            return response()->json(
                [
                'errors'=> ['message' => ["Unknown user selected "]]
                ], 403
            );
        }

        if(Auth::user()['is_admin']) {
            User::where([
                'id' => $user->id
            ])->decrement('deposit_balance', $request->amount);
            return response()->json(
                [
                'success'=> ['message' => ["User Deposit balance has been debited with $$request->amount"]]
                ], 201
            );
        } else {
            AccountFundingRequest::insert([
                'user_id' => Auth::id(),
                'receiver_id' => $user->id,
                'type' => 'deposit_balance',
                'action' => 'debit',
                'amount' => $request->amount,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'approved_at' => date('Y-m-d H:i:s'),
            ]);
            $details = [
                'amount' => $request->amount,
                'funder' => Auth::user()['name'],
                'fundee' => $user->name,
                'subject' => 'A Moderator Requested To Debit A User Deposit Balance',
                'date' => date('Y-m-d H:i:s'),
                'email' => $user->email,
                'view' => 'emails.admin.debitaccountrequest'
            ];
            $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();

            // send to admins
            foreach($admins as $admin) {
                $mailer = new \App\Mail\MailSender($details);
                Mail::to($admin->email)->send($mailer);
            }
            return response()->json(
                [
                'success'=> ['message' => ["User will be debited with $$request->amount when admin approves it"]]
                ], 201
            );

            // send email to super admins
        }

        return response()->json(
            [
            'errors'=> ['message' => ["Error debiting the user account"]]
            ], 403
        );
    }

    public function fundCurrentInvested(Request $request) {
        $user = User::where('name', $request->name)->first();
        if(!$user) {
            return response()->json(
                [
                'errors'=> ['message' => ["Unknown user selected "]]
                ], 403
            );
        }

        if(Auth::user()['is_admin']) {
            User::where([
                'id' => $user->id
            ])->increment('currently_invested', $request->amount);
            return response()->json(
                [
                'success'=> ['message' => ["User Currently Invested has been funded with $$request->amount"]]
                ], 201
            );
        } else {
            AccountFundingRequest::insert([
                'user_id' => Auth::id(),
                'receiver_id' => $user->id,
                'type' => 'currently_invested',
                'action' => 'credit',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                // 'approved_at' => date('Y-m-d H:i:s'),
                'amount' => $request->amount
            ]);
            $details = [
                'amount' => $request->amount,
                'funder' => Auth::user()['name'],
                'fundee' => $user->name,
                'subject' => 'A Moderator Requested To Fund A User Currently Invested',
                'date' => date('Y-m-d H:i:s'),
                'email' => $user->email,
                'view' => 'emails.admin.fundcurrentlyinvestedrequest'
            ];
            $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();

            // send to admins
            foreach($admins as $admin) {
                $mailer = new \App\Mail\MailSender($details);
                Mail::to($admin->email)->send($mailer);
            }
            return response()->json(
                [
                'success'=> ['message' => ["User's currently invested will be funded with $$request->amount when admin approves it"]]
                ], 201
            );

            // send email to super admins
        }

        return response()->json(
            [
            'errors'=> ['message' => ["Error funding the user currently invested"]]
            ], 403
        );
    }

    public function debitCurrentInvested(Request $request) {
        $user = User::where('name', $request->name)->first();
        if(!$user) {
            return response()->json(
                [
                'errors'=> ['message' => ["Unknown user selected "]]
                ], 403
            );
        }

        if(Auth::user()['is_admin']) {
            User::where([
                'id' => $user->id
            ])->decrement('currently_invested', $request->amount);
            return response()->json(
                [
                'success'=> ['message' => ["User's Currently Invested has been debited with $$request->amount"]]
                ], 201
            );
        } else {
            AccountFundingRequest::insert([
                'user_id' => Auth::id(),
                'receiver_id' => $user->id,
                'type' => 'currently_invested',
                'action' => 'debit',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                // 'approved_at' => date('Y-m-d H:i:s'),
                'amount' => $request->amount
            ]);
            $details = [
                'amount' => $request->amount,
                'funder' => Auth::user()['name'],
                'fundee' => $user->name,
                'subject' => 'A Moderator Requested To Debit A User Currently Invested',
                'date' => date('Y-m-d H:i:s'),
                'email' => $user->email,
                'view' => 'emails.admin.debitcurrentlyinvestedrequest'
            ];
            $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();

            // send to admins
            foreach($admins as $admin) {
                $mailer = new \App\Mail\MailSender($details);
                Mail::to($admin->email)->send($mailer);
            }
            return response()->json(
                [
                'success'=> ['message' => ["User's currently invested will be debited with $$request->amount when admin approves it"]]
                ], 201
            );

            // send email to super admins
        }

        return response()->json(
            [
            'errors'=> ['message' => ["Error debiting the user account"]]
            ], 403
        );
    }

    public function fundReferralBonus(Request $request) {
        $user = User::where('name', $request->name)->first();
        if(!$user) {
            return response()->json(
                [
                'errors'=> ['message' => ["Unknown user selected "]]
                ], 403
            );
        }

        if(Auth::user()['is_admin']) {
            User::where([
                'id' => $user->id
            ])->increment('referral_bonus', $request->amount);
            return response()->json(
                [
                'success'=> ['message' => ["User's referral bonus has been credited with $$request->amount"]]
                ], 201
            );
        } else {
            AccountFundingRequest::insert([
                'user_id' => Auth::id(),
                'receiver_id' => $user->id,
                'type' => 'referral_bonus',
                'action' => 'credit',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                // 'approved_at' => date('Y-m-d H:i:s'),
                'amount' => $request->amount
            ]);

            $details = [
                'amount' => $request->amount,
                'funder' => Auth::user()['name'],
                'fundee' => $user->name,
                'subject' => 'A Moderator Requested To Fund A User Referral Bonus',
                'date' => date('Y-m-d H:i:s'),
                'email' => $user->email,
                'view' => 'emails.admin.fundreferralbonusrequest'
            ];
            $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();

            // send to admins
            foreach($admins as $admin) {
                $mailer = new \App\Mail\MailSender($details);
                Mail::to($admin->email)->send($mailer);
            }

            return response()->json(
                [
                'success'=> ['message' => ["User's referral bonus will be credited with $$request->amount when admin approves it"]]
                ], 201
            );

            // send email to super admins
        }

        return response()->json(
            [
            'errors'=> ['message' => ["Error crediting the user account"]]
            ], 403
        );
    }

    public function debitReferralBonus(Request $request) {
        $user = User::where('name', $request->name)->first();
        if(!$user) {
            return response()->json(
                [
                'errors'=> ['message' => ["Unknown user selected "]]
                ], 403
            );
        }

        if(Auth::user()['is_admin']) {
            User::where([
                'id' => $user->id
            ])->decrement('referral_bonus', $request->amount);
            return response()->json(
                [
                'success'=> ['message' => ["User's referral bonus has been debited with $$request->amount"]]
                ], 201
            );
        } else {
            AccountFundingRequest::insert([
                'user_id' => Auth::id(),
                'receiver_id' => $user->id,
                'type' => 'referral_bonus',
                'action' => 'debit',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                // 'approved_at' => date('Y-m-d H:i:s'),
                'amount' => $request->amount
            ]);
            $details = [
                'amount' => $request->amount,
                'funder' => Auth::user()['name'],
                'fundee' => $user->name,
                'subject' => 'A Moderator Requested To Debit A User Referral Bonus',
                'date' => date('Y-m-d H:i:s'),
                'email' => $user->email,
                'view' => 'emails.admin.debitreferralbonusrequest'
            ];
            $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();

            // send to admins
            foreach($admins as $admin) {
                $mailer = new \App\Mail\MailSender($details);
                Mail::to($admin->email)->send($mailer);
            }

            return response()->json(
                [
                'success'=> ['message' => ["User's referral bonus will be debited with $$request->amount when admin approves it"]]
                ], 201
            );

            // send email to super admins
        }

        return response()->json(
            [
            'errors'=> ['message' => ["Error debiting the user account"]]
            ], 403
        );
    }

    public function quickWithdrawal(Request $request) {
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
            return response()->json(
                [
                'success'=> ['message' => ["Quick withdrawal created successfully"]]
                ], 201
            );
        } catch(\Exception $e) {
            return response()->json(
                [
                'error'=> ['message' => ["Error sending the quickwithdrawal email"]]
                ], 403
            );
        }
    }

    public function approve(Request $request) {
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
            return response()->json(
                [
                    "errors"=> ["message" => ["Record not found"]]
                ], 403
            );
        }

        if($result->action == "debit") {
            $execute = User::where('id', $result->receiver_id)
                                ->decrement($result->type, $result->amount);
            if($execute) {
                $result = AccountFundingRequest::where('id', $id)
                        ->update(["approved_at" => date("Y-m-d H:i:s") ]);
                if($result){
                    return response()->json([
                        "success"=> ["message" => ["Approved And user debited successfully"]]
                    ], 200);
                }
            }
        }

        $execute = User::where('id', $result->receiver_id)
                            ->increment($result->type, $result->amount);
        if($execute) {
            $result = AccountFundingRequest::where('id', $id)
                    ->update(["denied_at" => date("Y-m-d H:i:s") ]);
            if($result){
                return response()->json([
                    "success"=> ["message" => ["Approved And user funded successfully"]]
                ], 200);
            }
        }
    }

    public function deny ( Request $request ) {
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
            return response()->json(
                [
                    "errors"=> ["message" => ["Record not found"]]
                ], 403
            );
        } 
        $result = AccountFundingRequest::where('id', $id)
                                ->update([
                                    'denied_at' => date("Y-m-d H:i:s")
                                ]);
        if($result){
            return response()->json([
                    "success"=> ["message" => ["Denied successfully"]]
                ], 200);
        }
    }
}
