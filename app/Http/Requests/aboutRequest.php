<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class aboutRequest extends FormRequest
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
            'massage' => 'required|string',
            'massage_en' => 'required|string',
            'details' => 'required|string',
            'details_en' => 'required|string',
            'Objectives' => 'required|string',
            'Objectives_en' => 'required|string',
            'team' => 'required|string',
            'team_en' => 'required|string',
            
  
        ];
    }
}
