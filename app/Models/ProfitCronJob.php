<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProfitCronJob extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'user_wallet_id',
        'deposit_id',
        'child_investment_plan_id',
        'transaction_hash',
        'interest_received',
        'wallet_balance',
        'current_invested_balance',
        'created_at',
        'updated_at'
    ]; 

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function user_wallet() {
        return $this->belongsTo(UserWallet::class, 'user_wallet_id');
    }

    public function plan() {
        return $this->belongsTo(ChildInvestmentPlan::class, 'child_investment_plan_id');
    }

    public function deposit() {
        return $this->belongsTo(Deposit::class, 'deposit_id');
    }
}
