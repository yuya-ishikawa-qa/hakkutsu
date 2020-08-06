<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'store_name' => 'required|string|max:255',
            'postal' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'tel' => 'required|string|max:50',
            'mail' => 'required|string|max:50',
            'business_hours' => 'required|string|max:50',
            'description' => 'required|string|max:255',
            'image_path' =>  'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
