<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestjobsRequest extends FormRequest
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
//        dd($this->all());
        return [
            'name' => 'required|string',
            'gender' => 'required||in:male,female',
            'email' => 'required|email',
            'address' => 'required|string',
            'phone' => 'required|integer',
            'dob' => 'required|date',
            'status' => 'required|in:single,married,widower,absolute',
            'study' => 'required|string',

        ];
    }
}
