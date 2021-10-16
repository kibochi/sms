<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubjectRequest extends FormRequest
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
         $rules = [
            'admin_id' => 'required',
            'subject_name' => 'required|min:3',       
         ];

            if ($this->getMethod() === 'POST') {
                    $rules += ['subject_name' => 'required|unique:subjects,subject_name'];
       
    }
         return $rules;
    }
    
}