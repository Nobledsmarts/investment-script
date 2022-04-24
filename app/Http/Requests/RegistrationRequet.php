<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequet extends FormRequest {

    /**
     * Indicates if the validator should stop on the first rule failure.
     * 
     * @var bool
     */
    protected $stopOnFirstFailure = true;

    
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'email' => 'required|unique:users,email,except,id|email:filter', 
            'username' => 'required|alpha_num|unique:users,name,except,id',
            'password' => 'required|min:6',
            'repassword' => 'required|same:password',
            'terms' => 'required'
        ];
    }

    /**
     * Get error messages for the defined validation rules.
     * 
     * @return array
     */

    public function messages() {
        return [
            'email.required' => 'Email is required',
            'email.email' => 'Please provide a valid email',
            'email.unique' => 'Email already registered',
            'username.required' => 'Username is required for registration',
            'username.unique' => 'Username already taken.',
            'username.alpha_num' => 'Username can only contain alphabets or number only',
            'password.required' => 'Please enter your password',
            'password.min' => 'Password too short',
            'repassword.required' => 'Password does not match',
            'repassword.same' => 'Password does not match',
            'terms.required' => 'You must accept our terms and conditions'
        ];
    }
}
