<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transactions extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'currency',
        'amount',
        'transaction_hash',
        'created_at',
        'updated_at',
        'deleted_at',
        'type',
    ];
}
