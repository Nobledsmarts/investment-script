<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reviews extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'user',
        'occupation',
        'plan',
        'review',
        'active',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    // public function user() {
    //     return $this->belongsTo(User::class, 'user_id');
    // }
    public function child_plan(){
        return $this->belongsTo(ChildInvestmentPlan::class, 'plan_id');
    }
}
