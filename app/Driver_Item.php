<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver_Item extends Model
{
    //

    protected $primaryKey = "id";
     protected $table = 'item';



    protected $fillable = [
        'driver_id',
        'item_id',
        'name',
        'barcode',
        'serial_number',
        'date_reg',
        'item_expiry_date',
        'status'
    ];

    //  public function driver(){
    //     return $this->belongsTo('App\Driver','driver_id');
    // }

    // public function category(){
    //     return $this->belongsTo('App\Category','item_id');
    // }

}
