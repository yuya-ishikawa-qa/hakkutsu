<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UsersDestinationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return  true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'destination_postal_code' => ['required', 'string', 'max:7', 'regex:/^(([0-9]{3}-[0-9]{4})|([0-9]{7}))$/'],
            'destination_1' => ['required', 'string', 'max:60'],
            'destination_2' => ['required', 'string', 'max:60'],
            'destination_3' => ['required', 'string', 'max:60'],
        ];
    }
}
