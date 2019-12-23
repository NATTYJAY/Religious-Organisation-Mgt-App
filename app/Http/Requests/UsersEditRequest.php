<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersEditRequest extends FormRequest
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
            'email'=>'required|email',
            'role_id'=>'required',
            'phone'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Please provide the name of the User',
            'email.email' =>'Incorrect email format',
            'phone.required'=>'Please provide user\'s Phone Number',
            'email.required'=>'Please provide user\'s email',
            'role_id.required'=>'Please select User\'s Role'

        ];
    }
}
