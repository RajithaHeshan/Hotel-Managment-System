<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHousekeepersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('housekeepers', function (Blueprint $table) {
            $table->bigIncrements('housekeeper_id');
            $table->string('first_Name');
            $table->string('last_Name');
            $table->string('nic_Number');
            $table->string('house_Number');
            $table->string('street');
            $table->string('city');
            $table->string('hired_Agency_Name');
            $table->string('gender');
            $table->string('contact_Number');
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
        Schema::dropIfExists('housekeepers');
    }
}
