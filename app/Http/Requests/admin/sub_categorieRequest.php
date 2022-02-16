<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class sub_categorieRequest extends FormRequest
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
            'image'=> 'required_without:id',
            'name'   => 'required',
            'desc'     =>'required',
            'categories'=>'required'
        ];
    }

    public function messages()
    {
        return[
             'image'=> 'this failed reuired',
            'name'   => 'this failed reuired',
            'desc'     =>'this failed reuired',
            'categories'=>'this failed reuired'

        ];
    }
}
