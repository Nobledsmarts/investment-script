<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserWalletRequest extends FormRequest
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
            // 'main_wallet_id' => 'required|unique:user_wallets,main_wallet_id,except,id',
            'currency_address' => 'required',
            'memo_token' => 'required_if:has_memo,true'
        ];
    }

    public function messages()
    {
        return [
            // 'main_wallet_id.unique' => 'Address has already been created for this wallet',
            'currency_address.required' => 'Address is required for this wallet',
            'memo_token.required_if' => 'Memo is required for this wallet',
        ];
    }
}
