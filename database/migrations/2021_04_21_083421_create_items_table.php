<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->char('item_ID')->unique();
            $table->string('item_Name');
            $table->string('item_Type');
            $table->string('supplier_Name');
            $table->double('unit_Price');
            $table->integer('quantity');
            $table->text('description');
           // $table->timestamp('entered_at')->nullable();
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
        Schema::dropIfExists('items');
    }
}
