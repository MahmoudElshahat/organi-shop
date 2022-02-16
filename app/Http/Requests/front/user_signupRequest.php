<?php

namespace App\Http\Requests\front;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\User;
class user_signupRequest extends FormRequest
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
            'email'=>'required|unique:users,email',
            'password'=>'required'
        ];
    }

    public function messages()
    {
        return[
            'name'=>'this failed is required',
            'email'=>'this failed is required',
            'password'=>'this failed is required'
        ];
    }
}
