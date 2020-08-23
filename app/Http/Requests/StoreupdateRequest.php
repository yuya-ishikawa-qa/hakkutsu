<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreupdateRequest extends FormRequest
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
        // $store_id=$id;
        return [
        'store_name' => ['required', 'string', 'max:30'],
        'postal' => ['required', 'string', 'max:7', 'regex:/^(([0-9]{3}-[0-9]{4})|([0-9]{7}))$/'],
        'address' => ['required', 'string', 'max:100'],
        'tel' => ['required', 'string', 'max:15' , 'regex:/^(0{1}\d{9,10})$/'],
        'mail' => ['required', 'string', 'email', 'max:60'],
        'description' => ['required', 'string', 'max:255'],
        'image_path' =>  ['file', 'image','mimes:jpeg,png,jpg,gif','max:2048'],
    ];
    }
}
