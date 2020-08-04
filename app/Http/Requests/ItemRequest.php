<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
            'item_name' => 'required|string|max:255',
            'status' => 'required|string|max:20',
            'stock' => 'required|integer',
            'price' => 'required|integer',
            'description' => 'required|string|max:255',
            'tax_id' => 'required|string|max:255',
            'image_path' =>  'required|file|image|mimes:jpeg,png,jpg,gif|max:2048',
        
        ];
    }
}
