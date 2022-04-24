<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WithdrawReferralBonus extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'transaction_hash',
        'amount',
        'created_at',
        'updated_at',
        'deleted_at',
        'deleted_at',
        'status',
        'approved_at',
        'denied_at'
    ];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
