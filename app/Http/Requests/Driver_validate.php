<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class Driver_validate extends FormRequest
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
            'image_path'=>'required',
            'fname'=>'required',
            'lname'=>'required',
            'height'=>'required',
            'dob'=>'required',
            'nok'=>'required',
            'gender'=>'required',
            'address'=>'required',
            //'city'=>'required',
            'state'=>'required',
            'license_issue_date'=>'required',
            'license_expiry_date'=>'required',
            //'email'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'image_path.required'=>'Please select Image to be uploaded',
            'fname.required' =>'Please provide First Name'

        ];
    }
}
