<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExamRequest extends FormRequest
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
            'student_id' => 'required',       
            'subject_name' => 'required',       
            'marks' => 'required|numeric|min:0|max:100',       
         ];

        if ($this->getMethod() === 'POST') {
            $rules += ['admin_id' => 'required|unique:exams,admin_id'];
            $rules += ['student_id' => 'required|unique:exams,student_id'];
       
        }
         return $rules;
    }
    
}