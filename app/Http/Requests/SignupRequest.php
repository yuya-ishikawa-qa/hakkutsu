<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SignupRequest extends FormRequest
{
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
            'name' => 'required | string | max:255',
            'name_kana' => 'required | string | max:255',
            'postal_code' => 'required | string | max:255',
            'address_1' => 'required | string | max:255',
            'address_2' => 'required | string | max:255',
            'address_3' => 'required | string | max:255',
            'tel' => 'required | string | max:255',
            'email' => 'required | string | email | max:255',
            Rule::unique('users', 'email')->whereNull('deleted_at'),
            // 8文字以上＆英数字(アルファベット・数字は最低1文字以上は使用する)
            'password' => 'required | string | min:6 | confirmed',
        ];
    }
}
