<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    //
     protected $primaryKey = "id";
     protected $table = 'driver';



    protected $fillable = [
        'fname',
        'lname',
        'height',
        'dob',
        'nok',
        'gender',
        'address',
        'license_issue_date',
        'license_expiry_date',
        'image_path',
        'plate_number'
    ];

    

}
