<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();

         
            $table->text('eventType');
            $table->string('title');
            $table->text('fname');
            $table->text('lname');
            $table->text('nic');
            $table->text('contact');
            $table->text('email');
            $table->text('no');
            $table->text('street');
            $table->text('city');
            $table->double('charges');
            $table->text('notes');
            $table->date('eventday');
            $table->time('time');
            $table->string('hallNumber');
            $table->integer('participantNo');

          
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
        Schema::dropIfExists('events');
    }
}
