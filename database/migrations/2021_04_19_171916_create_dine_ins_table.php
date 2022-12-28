<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDineInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dine_ins', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->string('category');
            $table->string('meal_code');
            $table->string('menu');
            $table->string('small_portion_price');
            $table->string('medium_portion_price');
            $table->string('large_portion_price');

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
        Schema::dropIfExists('dine_ins');
    }
}
