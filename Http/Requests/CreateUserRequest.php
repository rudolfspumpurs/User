<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:3|confirmed',
            'language' => 'required|min:2|max:2',
            'markup' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'vat' => 'required|regex:/^\d*(\.\d{1,2})?$/',
            'currency' => 'required|min:3|max:3',
            'currency_rate' => 'required|regex:/^\d*(\.\d{1,2})?$/',
        ];
    }

    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [];
    }
}
