<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class request_category extends FormRequest
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
            'description'=>'required',
           
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'Please provide the name of the category',
            'description.required' =>'Please provide the description of the category'

        ];
    }
}
