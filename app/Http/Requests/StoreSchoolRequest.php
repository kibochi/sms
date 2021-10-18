<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSchoolRequest extends FormRequest
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
        $rules =  [
            'admin_id' =>'required', 
            'school_name' => 'required|min:3',
            'prefix_name' => 'required|min:3|max:5',     
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            
        ];

        if ($this->getMethod() === 'POST') {
             $rules += ['email' => 'required|email|unique:schools,email'];
             $rules += ['phone' => 'required|min:10|max:10|unique:schools,phone'];
        }
             return $rules;
    }
}