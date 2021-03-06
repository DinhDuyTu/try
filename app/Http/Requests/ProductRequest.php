<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'category_id' => 'required|numeric',
            'name' => 'required|min:3|max:100',
            'price' => 'required|numeric|min:0',
            'is_highlight' => 'required|numeric|min:0|max:1',
            'quantity' => 'required|numeric|min:0|max:999',
            // 'images' => 'required',
        ];
    }
}
