<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class productRequest extends FormRequest
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
              'image' => 'nullable',

              'name'=>'required',

              'price' => 'required',

              'sale' => 'nullable',

              'descountType'=>'required',

              'attr_name'=>'required',
              
              'attr_value'=>'required',

              'qty'=>'required',

              'desc'=>'required',

              'category' => 'required'
        ];
    }

    public function messages()
    {
        return[
            'image' => 'this failed is required',

            'name' => 'this failed is required',

            'price' => 'this failed is required',

            'sale' => 'this failed is required',

            'descountType' => 'this failed is required',

            'qty' => 'this failed is required',

            'desc' => 'this failed is required',

            'category' => 'this failed is required'

        ];
    }
}
