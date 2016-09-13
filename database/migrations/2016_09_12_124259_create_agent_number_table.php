<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentNumberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Create('agent_number',function (Blueprint $table){
            $table->unsignedInteger('agent_id');
            $table->string('number');
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
        Schema::drop("agent_number");
    }
}
