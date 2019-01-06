<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Driver_veh extends FormRequest
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
            'engine_capacity'=>'required',
            'engine_number'=>'required',
            'chasis_number'=>'required',
            'vehicle_make'=>'required',
            'vehicle_color'=>'required',
            'license_fee'=>'required',
            'license_date'=>'required',
            'license_expiry_date'=>'required'
            //'email'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'engine_capacity.required'=>'Please Provide Engine Capacity',
            'engine_number.required'=>'Please Provide Engine Number',
            'chasis_number.required'=>'Please Provide Chasis Number',
            'vehicle_make.required'=>'Please Provide Vehicle Make',
            'vehicle_color.required'=>'Please Provide Vehicle Colour',
            'license_fee.required'=>'Please Provide License Fee',
            'license_date.required'=>'Please Provide License Date',
            'license_expiry_date.required'=>'Please provide license Expiry Date'
        ];
    }
}
