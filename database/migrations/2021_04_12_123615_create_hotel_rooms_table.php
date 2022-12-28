<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelRoomsTable extends Migration
{
    //this migration class is responsible of creating the table to the database
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_rooms', function (Blueprint $table) {
            
            $table->id();

            $table->String('roomNo');
            $table->integer('floorNo');
            $table->String('roomType');
            $table->text('description');
            $table->integer('noOfBeds');
            $table->integer('maxNoOfChildren');
            $table->integer('maxNoOfAdults');
            $table->float('price');
            $table->String('roomStatus')->default('Available');

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
        Schema::dropIfExists('hotel_rooms');
    }
}
