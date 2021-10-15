<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            'admin_id' => 'required',
            'student_profile' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            'firstname' => 'required|min:3',       
            'surname' => 'required|min:3',       
            'othername' => 'required|min:3',       
            'student_id' => 'required',       
            'class' => 'required',  
            'dob' => 'required|date',       
            'gender' => 'required',       
                 
          ];

          if ($this->getMethod() === 'POST') {
             $rules += ['student_id' => 'required|unique:students,student_id'];
          }

        return $rules;





    }
}