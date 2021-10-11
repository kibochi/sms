<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassroomRequest extends FormRequest
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
           
            'classname' => 'required|min:3',       
    ];

       if ($this->getMethod() === 'POST') {
            $rules += ['classname' => 'required|unique:classrooms,classname'];
       
    }
    return $rules;
    }
}