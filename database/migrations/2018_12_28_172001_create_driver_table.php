<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname')->nullable();
            $table->string('lname')->nullable();
            $table->string('height')->nullable();
            $table->string('dob')->nullable();
            $table->string('nok')->nullable();
            $table->string('gender')->nullable();
            $table->string('address')->nullable();
            $table->string('license_issue_date')->nullable();
            $table->string('license_expiry_date')->nullable();
            $table->string('image_path')->nullable();
            $table->string('plate_number')->unique()->nullable();
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
        Schema::dropIfExists('driver');
    }
}
