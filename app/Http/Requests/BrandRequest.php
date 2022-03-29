<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
            'image' => 'required_if|image|mimes:jpg,png|type,==,create',
        ];
    }

    public function messages()
    {
        return [
            'image.required' => 'يجب ارفاق صورة',
            'image.image' => 'يجب أن تكون من نوع صورة',
            'image.mimes' => 'يجب أن تكون من نوع png أو jpg',



        ];
    }
}
