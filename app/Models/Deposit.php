<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Deposit extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'child_investment_plan_id',
        'wallet_id',
        'transaction_hash', 
        'amount', 
        'remaining_duration', 
        'expires_at', 
        'is_expired',
        'reinvestment',
        'status',
        'running',
        'created_at',
        'updated_at',
        'deleted_at',
        'approved_at',
        'denied_at'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function wallet() {
        return $this->belongsTo(MainWallet::class, 'wallet_id');
    }

    public function plan() {
        return $this->belongsTo(ChildInvestmentPlan::class, 'child_investment_plan_id');
    }
}
