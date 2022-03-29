<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPasswordRequest extends FormRequest
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
        $guard = auth('admin')->check() ? 'admin' : 'pro';
        return [
            'current_password' => 'required|string|current_password:' . $guard,
            'new_password' => 'required|string|min:3|max:25|confirmed',
            'new_password_confirmation' => 'required|string|min:3|max:25',
        ];
    }
}
