<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirlines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airlines',function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('agent_id');
            $table->string('code');
            $table->string('name');
            $table->boolean('terminated')->default(0);
            $table->timestamps();
            $table->foreign('agent_id')->references('id')->on('agent')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('airlines');
    }
}
