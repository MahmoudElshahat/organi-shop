<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class messagesRequest extends FormRequest
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
            'email' => 'required',
            'message' => 'required'

        ];
    }

    public function messages()
    {
        return[
            'name'=>'this failed is required',
            'email' => 'this failed is required',
            'message' => 'this failed is required'
        ];
    }
}
