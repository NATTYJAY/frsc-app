<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class driverAddProduct extends FormRequest
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
            'barcode'=>'required',
            'serial_number'=>'required',
            'date_reg'=>'required',
            'item_expiry_date'=>'required',


           
        ];
    }

    public function messages()
    {
        return [
            'barcode.required'=>'Please Provide Barcode or specify "-" for an empty barcode',
            'serial_number.required' =>'Please Provide Serial Number or specify "-" for an empty Serial number',
            'date_reg.required' =>'Please Provide Registered/Renew Date',
            'item_expiry_date.required' =>'Please Provide Expiration Date'

        ];
    }
}
