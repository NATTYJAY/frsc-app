<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver_vehicle extends Model
{
    //
    protected $primaryKey = "id";
     protected $table = 'vehicle_reg';



    protected $fillable = [
        'driver_id',
        'engine_capacity',
        'engine_number',
        'chasis_number',
        'vehicle_make',
        'vehicle_color',
        'license_fee',
        'license_date',
        'license_expiry_date'
    ];

     public function driver(){
        return $this->belongsTo('App\Driver','driver_id');
    }
}
