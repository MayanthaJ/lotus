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
            $table->unsignedInteger('agent_id');
            $table->unsignedInteger('country');
            $table->unsignedInteger('flight');
            $table->unsignedInteger('type');
            $table->double('price');
            $table->string('description');
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
