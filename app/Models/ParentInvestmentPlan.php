<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ParentInvestmentPlan extends Model
{
    use HasFactory;

    use SoftDeletes;
    // protected $table = 'parent_investment_plans';
    protected $fillable = [
        'id',
        'name',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    public function children() {
        return $this->hasMany(ChildInvestmentPlan::class, 'id');
    }
}
