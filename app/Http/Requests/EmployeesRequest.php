<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EmployeesRequest extends Request
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
            'name' => 'required|max:50|min:3',
            'age' => 'required|max:2|min:1',
            'address' => 'required',
            'email' => 'required|unique',
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Er, you forgot your name!',
            'name.max' => 'your name is too long',
            'age.required' => 'Er, you forgot your age!',
            'age.max' => 'Please check your age',
            'address.required' => 'Er, you forgot your address!',
            'email.required' => 'Er, you forgot your Email address!',
            'email.unique' => 'Email already taken!',
        ];
    }
}
