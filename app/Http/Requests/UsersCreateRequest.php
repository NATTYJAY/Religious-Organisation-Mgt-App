<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersCreateRequest extends FormRequest
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
            //
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'role_id'=>'required',
            'password'=>'required|min:6',
            'phone'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Please provide the name of the User',
            'email.unique' =>'User already exits',
            'email.email' =>'Incorrect email format',
            'email.required'=>'Please provide user\'s email',
            'role_id.required'=>'Please select User\'s Role',
            'password.required'=>'Please provide Password',
            'phone.required'=>'Please provide Phone Number',
            'password.min'=>'Password must be greater than or equal to 6 digits'

        ];
    }

}
