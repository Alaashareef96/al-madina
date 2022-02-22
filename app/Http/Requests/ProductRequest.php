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
            'name.ar' => 'required|string',
            'name.en' => 'required|string',
            'details.ar' => 'required|string',
            'details.en' => 'required|string',
            'calories' => 'required|integer',
            'fats' => 'required|integer',
            'protein' => 'required|integer',
            'carbohydrate' => 'required|integer',
            'vitamin' => 'required|integer',
            'price' => 'required|integer',
            'category.*' => 'numeric|exists:categories,id',
          'image' => 'required_if:type,==,create'


        ];
    }
}
