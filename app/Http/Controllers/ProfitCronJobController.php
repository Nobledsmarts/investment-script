<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\ProfitCronJob;
use App\Models\User;
use App\Models\UserWallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ProfitCronJobController extends Controller {

    public function deleteCronJobs() {
        $prefix = '/home/wiselfgr/daily-interest*.*';
        array_map('unlink', glob($prefix));
    }

    public function addProfit() {
        $deposits = Deposit::where([
            'status' => 'accepted',
            'running' => 1,
        ])->get();

        foreach($deposits as $deposit) {
            if(isUpTo24Hours($deposit->updated_at)) {

                $user_wallet = UserWallet::where('id', $deposit->user_wallet_id)->first();
                $user = User::where('id', $deposit->user_id)->first();
                $interest_rate = $deposit->plan->interest_rate;
                $amount = $deposit->amount;
                $interest = ($amount/100) * $interest_rate;

                User::where('id', $deposit->user_id)->increment('deposit_interest', $interest);

                ProfitCronJob::insert([
                    'user_id' => $deposit->user_id,
                    'user_wallet_id' => $deposit->user_wallet_id,
                    'deposit_id' => $deposit->id,
                    'child_investment_plan_id' => $deposit->child_investment_plan_id,
                    'transaction_hash' => $deposit->transaction_hash,
                    'interest_received' => $interest,
                    'deposit_balance' => $deposit->user->deposit_balance,
                    'currently_invested_balance' => $user->currently_invested,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]);

                Deposit::where('id', $deposit->id)->decrement('remaining_duration', 1);
                $duration = Deposit::where('id', $deposit->id)->first();

                // send email
                // send email for daily interest
                $details = [
                    'subject' => 'You Have Successfully Received An Interest For Your Investment For Today',
                    'transaction_reference' => $deposit->transaction_hash,
                    'amount_deposited' => $deposit->amount,
                    'wallet' => $deposit->user_wallet->currency,
                    'duration' => $deposit->plan->duration,
                    'plan' => $deposit->plan->name,
                    'interest' => ((($deposit->amount)/100) * $deposit->plan->interest_rate) ,
                    'interest_rate' => $deposit->plan->interest_rate,
                    'days_remaining' => $duration->remaining_duration,
                    'view' => 'emails.user.depositinterest',
                    'email' => $deposit->user->email,
                    'username' => $deposit->user->name
                ];

                $mailer = new \App\Mail\MailSender($details);
                Mail::to($deposit->user->email)->send($mailer);

                if($duration->remaining_duration < 1) {
                    Deposit::where('id', $deposit->id)->update(['running' => 0]);
                    User::where('id', $deposit->user_id)->increment('deposit_balance', $deposit->amount);
                    User::where('id', $deposit->user_id)->decrement('currently_invested', $deposit->amount);
                    // send notification, noting this deposit has stoped running

                    $details = [
                        'subject' => 'Your Investment Has Been Completed',
                        'date' => date("Y-m-d H:i:s"),
                        'transaction_reference' => $deposit->transaction_hash,
                        'amount_deposited' => $deposit->amount,
                        'wallet' => $deposit->user_wallet->currency,
                        'duration' => $deposit->plan->duration,
                        'plan' => $deposit->plan->name,
                        'view' => 'emails.user.investmentcompleted',
                        'email' => $deposit->user->email,
                        'username' => $deposit->user->name
                    ];
            
                    $mailer = new \App\Mail\MailSender($details);
                    Mail::to($deposit->user->email)->send($mailer);
                }
            }
        }
    }
}
