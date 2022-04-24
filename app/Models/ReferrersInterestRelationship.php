<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReferrersInterestRelationship extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'deposit_id',
        'depositor_id',
        'interest_receiver_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function depositor() {
        return $this->belongsTo(User::class, 'depositor_id');
    }

    public function receiver() {
        return $this->belongsTo(User::class, 'interest_receiver_id');
    }

    public function deposit() {
        return $this->belongsTo(Deposit::class, 'deposit_id');
    }
}
