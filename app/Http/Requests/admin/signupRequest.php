<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required|email|unique:admins,email',
            'password'=>'required'
        ];
    }


    public function messages()
    {
        return[
            'name'=>'this failed is exicts already',
            'email'=>'this failed is required',
            'password'=>'this failed is required'
        ];
    }
}
