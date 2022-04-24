<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMainWalletRequest extends FormRequest
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
    public function rules() {
        return [
            'currency' => 'required|unique:main_wallets,currency,except,id', 
            'currency_symbol' => 'required|unique:main_wallets,currency_symbol,except,id',
            'currency_address' => 'required',
            ];
    }

    /**
     * Get error messages for the defined validation rules.
     * 
     * @return array
     */

    public function messages() {
        return [
            'currency.required' => 'Currency is missing',
            'currency.unique' => 'The currency already exists',
            'currency_symbol.required' => 'Please provide the currency symbol',
            'currency_symbol.unique' => 'The choosen symbol already exists',
            'currency_address.required' => 'Please provide the wallet address for this wallet',
        ];
    }

}
