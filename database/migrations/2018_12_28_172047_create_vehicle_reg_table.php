<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleRegTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_reg', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('driver_id');
            $table->string('engine_capacity')->nullable();
            $table->string('engine_number')->nullable();
            $table->string('chasis_number')->nullable();
            $table->string('vehicle_make')->nullable();
            $table->string('vehicle_color')->nullable();
            $table->string('license_fee')->nullable();
            $table->string('license_date')->nullable();
            $table->string('license_expiry_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicle_reg');
    }
}
