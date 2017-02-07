<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Panierdefruits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fruits', function(Blueprint $table){
            $table->increments('id');
            $table->string('name',250);
            $table->text('description');
            $table->integer('prix');
            $table->integer('stock');
            $table->text('origine');
        });
    }
    //id,name,description, prix,stock,origine
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
