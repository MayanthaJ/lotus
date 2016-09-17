<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentPrice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::Create('agent_price',function (Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('agent_id');
            $table->unsignedInteger('country_id');
            $table->string('type');
            $table->double('price');
            $table->double('totalAmount');
            $table->string('description')->nullable();
            $table->boolean('terminated')->default(0);
            $table->foreign('agent_id')->references('id')->on('agent')->onDelete('cascade');
            $table->foreign('country_id')->references('id')->on('country')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('agent_price');
    }
}
