<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWithdrawReferralBonusRequest extends FormRequest
{
    protected $stopOnFirstFailure = true;

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'amount' => 'required|digits:10|min:10',
            'wallet' => 'required',
            'wallet_address' => 'required'
        ];
    }

    /**
     * Get error messages for the defined validation rules.
     * 
     * @return array
     */

    public function messages() {
        return [
            'amount.required' => 'Invalid amount',
            'amount.min' => 'Minimum amount for withdrawal is $10',
            'wallet.required' => 'Please provide the wallet to receive your payment',
            'wallet_address.required' => 'Please provide the wallet address to receive your payment',
            // 'amount.integer' => 'Invalid amount',
        ];
    }

}
