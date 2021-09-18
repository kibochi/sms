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
        return [
            'admin_id' =>'required', 
            'school_name' => 'required|min:3',
            'prefix_name' => 'required|min:3|max:5',
            'address' => 'required|min:3',
            'email' => 'required|email|unique:schools,email',
            'phone' => 'required|min:10|max:10|unique:schools,phone',
            'county' => 'required',
            'constituency' => 'required'
        ];
    }
}