<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class vendorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
           
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed'],
           
        ];
    }

    // public function messages()
    // {
    //     return [
    //         'name.required'=>'Please provide the name of the category',
    //         'description.unique' =>'User already exits'

    //     ];
    // }
}
