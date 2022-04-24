<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreChildInvestmentPlanRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:child_investment_plans,name,except,id',
            'minimum_amount' => 'required|lt:maximum_amount',
            'maximum_amount' => 'required|gt:minimum_amount',
            'interest_rate' => 'required|numeric',
            'referral_bonus' => 'required|numeric',
            'duration' => 'required|numeric'
        ];
    }
}
