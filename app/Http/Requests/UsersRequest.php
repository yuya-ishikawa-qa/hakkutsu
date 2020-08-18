<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UsersRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:30'],
            'name_kana' => ['required', 'string', 'max:30', 'regex:/^[ア-ン゛゜ァ-ォャ-ョー\s]+$/u'],
            'postal_code' => ['required', 'string', 'max:7', 'regex:/^(([0-9]{3}-[0-9]{4})|([0-9]{7}))$/'],
            'address_1' => ['required', 'string', 'max:60'],
            'address_2' => ['required', 'string', 'max:60'],
            'address_3' => ['required', 'string', 'max:60'],
            'tel' => ['required', 'string', 'max:15' , 'regex:/^(0{1}\d{9,10})$/'],
            'email' => [
                'required', 'string', 'email', 'max:60', 'confirmed',
                Rule::unique('users', 'email')->whereNull('deleted_at')
            ],
            'email_confirmation' => [
                'required', 'string', 'email', 'max:60',
                Rule::unique('users', 'email')->whereNull('deleted_at')
            ],
            'password' => ['required', 'string', 'min:6', 'confirmed', 'regex:/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{6,100}+\z/i'],
            'password_confirmation' => ['required', 'string', 'min:6', 'regex:/\A(?=.*?[a-z])(?=.*?\d)[a-z\d]{6,100}+\z/i'],
        ];
    }

    /**
     * 定義済みバリデーションルールのエラーメッセージ取得
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email_confirmation'=>'メールアドレスが異なります',
            'password_confirmation'=>'パスワードが異なります',
        ];
    }
}
