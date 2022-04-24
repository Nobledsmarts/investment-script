<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MainWallet extends Model {
    use HasFactory;

    use SoftDeletes;

    protected $fillable = [
        'currency',
        'color',
        'currency_symbol',
        'active',
        'has_memo',
        'currency_address',
        'memo_token',
        'total_traded',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}