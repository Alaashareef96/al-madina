<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EditProfileRequest extends FormRequest
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

//        $guard = auth('admin')->check() ? 'admin' : 'pro';

        return [
            'name' => 'required|string|min:3|max:45',
            'email' => 'required|string|email|unique:admins,email,'.auth('admin')->id(),
//            'current_password' => ['string',
//                Rule::requiredIf(function () use($request) {
//                return $request->get('new_password') != '';
//            }),
//            ],

        ];
    }
}
