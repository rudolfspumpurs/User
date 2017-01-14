<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    public function rules()
    {
        $userId = $this->route()->getParameter('users');

        return [
            'email' => "required|email|unique:users,email,{$userId}",
            'first_name' => 'required',
            'last_name' => 'required',
            'password' => 'confirmed',
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
