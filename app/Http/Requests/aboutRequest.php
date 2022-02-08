<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AboutRequest extends FormRequest
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
            'massage.ar' => 'required|string',
            'massage.en' => 'required|string',
            'details.ar' => 'required|string',
            'details.en' => 'required|string',
            'Objectives.ar' => 'required|string',
            'Objectives.en' => 'required|string',
            'team.ar' => 'required|string',
            'team.en' => 'required|string',
            'image' => 'required|image',
            'video' => 'required|video',  
        ];
    }
}
