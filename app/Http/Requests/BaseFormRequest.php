<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

class BaseFormRequest extends FormRequest{

    protected function failedValidation(Validator $validator)
    {

//        return response()->json($validator->errors()->toArray());
        throw new HttpResponseException(
            response()->json([
                'success'=>false,
                'data'=>$validator->errors()->toArray(),
            ]),
            '200'
        );
    }


}
