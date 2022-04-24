<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ChildInvestmentPlan extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    //  protected $table = 'child_investment_plans';

    protected $fillable = [
        'parent_investment_plan_id',
        'name',
        'minimum_amount',
        'maximum_amount',
        'interest_rate',
        'referral_bonus',
        'duration',
        'total_deposited',
        'total_accepted',
        'total_denied',
        'active',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function parent_plan() {
        return $this->belongsTo(ParentInvestmentPlan::class, 'parent_investment_plan_id');
    }
    //  public function parent_lan() {
    //     return $this->belongsTo(ParentInvestmentPlan::class, 'parent_investment_plan_id');
    // }
}
