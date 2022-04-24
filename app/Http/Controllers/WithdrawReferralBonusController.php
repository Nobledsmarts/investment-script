<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWithdrawReferralBonusRequest;
use App\Models\Transactions;
use App\Models\User;
use App\Models\WithdrawReferralBonus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WithdrawReferralBonusController extends Controller {

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(StoreWithdrawReferralBonusRequest $request, WithdrawReferralBonus $withdraw) {
        $user_id = Auth::id();

        $validated = $request->validated();

        $hash = generateTransactionHash($withdraw, 'transaction_hash', 25);

        $user = User::where('id', $user_id)->first();

        if(!$user) {
            return response()->json(
                [
                    'errors' => ['message' => ['Action forbidden']]
                ], 400
            );
        }

        if($user->referral_bonus < $request->amount) {
            return response()->json(
                [
                    'errors' => ['message' => ['Insufficient fund for this transaction']]
                ], 403
            );
        }

       $data = [
           'user_id' => $user_id,
           'transaction_hash' => $hash,
           'amount' => $validated['amount'],
           'created_at' => date('Y-m-d H:i:s'),
           'updated_at' => date('Y-m-d H:i:s')
       ];

        $insert_data = $withdraw->insert($data);

        if($insert_data) {

            Transactions::insert([
                'amount' => $validated['amount'],
                'user_id' => $user_id,
                'currency' => 'referral bonus',
                'transaction_hash' => $hash,
                'type' => 'referral_bonus',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            // send email
            $details = [
                'subject' => 'You Have Successfully Created A Withdrawal Request From Your Referral Bonus, Awaiting Confirmation',
                'amount' => $validated['amount'],
                'transaction_hash' => $hash,
                'wallet' => $validated['wallet'],
                'wallet_address' => $validated['wallet_address'],
                'date' => date("Y-m-d H:i:s"),
                'view' => 'emails.user.withdrawreferralbonusrequest',
                'username' => $user->name,
                'email' => $user->email
            ];

            $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();
            $mailer = new \App\Mail\MailSender($details);
            Mail::to($user->email)->send($mailer);
            $details['view'] = 'emails.admin.withdrawreferralbonusrequest';
            $details['subject'] = 'A User Has Requested For Withdrawal From Their Referral Bonus';
            $details['username'] = $user->name;

            // send to admins
            foreach($admins as $admin) {
                $mailer = new \App\Mail\MailSender($details);
                Mail::to($admin->email)->send($mailer);
            }

            return response()->json(
                [
                    'success' => ['message' => ['Withdrawal request created, please check your email for more details.']]
                ], 201
            );
        }
    }

    public function approve(Request $request, WithdrawReferralBonus $withdraw) {
        // authenticate admin

        // approve withdraw
        $withdraw_id = $request->id;
        $is_valid_withdrawal = $withdraw->find($withdraw_id);

        if(!$is_valid_withdrawal) {
            return response()->json(
                [
                    'errors' => ['message' => ['Withdrawal request not found']]
                ], 404
            );
        }

        if($is_valid_withdrawal->status == 'accepted') {
            return response()->json(
                [
                    'errors' => ['message' => ['Withdrawal request already approved']]
                ], 208
            );
        }

        if($is_valid_withdrawal->status == 'denied') {
            return response()->json(
                [
                    'errors' => ['message' => ['Withdrawal request already denied']]
                ], 208
            );
        }

        // check if user has enough balance before debiting
        $user_details = User::find($is_valid_withdrawal->user_id);

        if($user_details->referral_bonus < $is_valid_withdrawal->amount) {
            // send user email about transaction approval failure
            $details = [
                'subject' => 'Confirmation of Your Withdrawal Request From Your Referral Bonus Was Not Able To Be Confirmed Because Of Insufficient Fund',
                'amount' => $is_valid_withdrawal->amount,
                'transaction_hash' => $is_valid_withdrawal->transaction_hash,
                'date' => date("Y-m-d H:i:s"),
                'view' => 'emails.user.withdrawreferralbonusrequestfailed',
                'username' => $is_valid_withdrawal->user->name,
                'email' => $is_valid_withdrawal->user->email
            ];

            $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();
            $mailer = new \App\Mail\MailSender($details);
            Mail::to($is_valid_withdrawal->user->email)->send($mailer);
            $details['view'] = 'emails.admin.withdrawreferralbonusrequestfailed';
            $details['subject'] = 'Confirmation of A Withdrawal Request Was Not Able To Be Confirmed Because Of Insufficient Fund';

            // send to admins
            foreach($admins as $admin) {
                $mailer = new \App\Mail\MailSender($details);
                Mail::to($admin->email)->send($mailer);
            }

            return response()->json(
                [
                    'errors' => ['message' => ['Error approving this request, user has insufficient balance.']]
                ], 400
            );
        }

        $decrement_referral_bonus = User::where('id', $is_valid_withdrawal->user_id)->decrement('referral_bonus', $is_valid_withdrawal->amount);
        if($decrement_referral_bonus) {
            $approved_withdraw = $withdraw->where('id', $withdraw_id)->update(
                [
                    'status' => 'accepted',
                    'approved_at' => date("Y-m-d H:i:s")
                ]);

            if($approved_withdraw) {
                // send email
                $details = [
                    'subject' => 'Your Referral Bonus Withdrawal Request Has Been Processed And Approved',
                    'amount' => $is_valid_withdrawal->amount,
                    'transaction_hash' => $is_valid_withdrawal->transaction_hash,
                    'date' => date("Y-m-d H:i:s"),
                    'view' => 'emails.user.withdrawreferralbonusrequestapproved',
                    'username' => $is_valid_withdrawal->user->name,
                    'email' => $is_valid_withdrawal->user->email
                ];
    
                $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();
                $mailer = new \App\Mail\MailSender($details);
                Mail::to($is_valid_withdrawal->user->email)->send($mailer);
                $details['view'] = 'emails.admin.withdrawreferralbonusrequestapproved';
                $details['subject'] = 'A Referral Bonus Withdrawal Request Was Approved By An Admin';
                $details['admin'] = Auth::user()['name'];
    
                // send to admins
                foreach($admins as $admin) {
                    $mailer = new \App\Mail\MailSender($details);
                    Mail::to($admin->email)->send($mailer);
                }
                // update total withdrawn
                User::where('id', $is_valid_withdrawal->user_id)->increment('total_withdrawn', $is_valid_withdrawal->amount);

                return response()->json(
                    [
                    'success' => ['message' => ['Withdrawal approved.']]
                    ], 201
                );
            }
        } else {
            return response()->json(
                [
                    'errors' => ['message' => ['something unexpectedly went wrong.']]
                ], 500
            );
        }


    }

    public function deny(Request $request, WithdrawReferralBonus $withdraw) {
        // authenticate admin
        // deny withdraw
        $withdraw_id = $request->id;
        $is_valid_withdrawal = $withdraw->find($withdraw_id);

        if(!$is_valid_withdrawal) {
            return response()->json(
                [
                    'errors' => ['message' => ['Withdrawal request not found']]
                ], 404
            );
        }

        if($is_valid_withdrawal->status == 'denied') {
            return response()->json(
                [
                    'errors' => ['message' => ['Withdrawal request already denied']]
                ], 208
            );
        } elseif($is_valid_withdrawal->status == 'accepted') {
            return response()->json(
                [
                    'errors' => ['message' => ['This Withdrawal request has already been approved, so can\'t be denied']]
                ], 208
            );
        }

        $denied_withdraw = $withdraw->where('id', $withdraw_id)->update(
            [
                'status' => 'denied',
                'denied_at' => date("Y-m-d H:i:s")
            ]);

        if($denied_withdraw) {
            // send email

            $details = [
                'subject' => 'Your Withdrawal Request Was Denied!',
                'amount' => $is_valid_withdrawal->amount,
                'transaction_hash' => $is_valid_withdrawal->transaction_hash,
                'date' => date("Y-m-d H:i:s"),
                'view' => 'emails.user.withdrawreferralbonusrequestdenied',
                'username' => $is_valid_withdrawal->user->name,
                'email' => $is_valid_withdrawal->user->email
            ];

            $admins = User::where(['is_admin' => 1, 'permission' => '1'])->get();
            $mailer = new \App\Mail\MailSender($details);
            Mail::to($is_valid_withdrawal->user->email)->send($mailer);
            $details['view'] = 'emails.admin.withdrawreferralbonusrequestdenied';
            $details['subject'] = 'An Admin Has Denied A Withdrawal Request!';
            $details['admin'] = Auth::user()['name'];

            // send to admins
            foreach($admins as $admin) {
                $mailer = new \App\Mail\MailSender($details);
                Mail::to($admin->email)->send($mailer);
            }

            return response()->json(
                [
                    'errors' => ['message' => ['Withdrawal request denied']]
                ], 201
            );
        }
    }
}
