<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketPrice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Create('tickets_price',function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('ticket_id');
            $table->unsignedInteger('agent_price_id');
            $table->double('advance')->default(0);
            $table->double('amount');
            $table->boolean('payed')->default(0);
            $table->double('profit');
            $table->foreign('ticket_id')->references('id')->on('ticket')->onDelete('cascade');
            $table->foreign('agent_price_id')->references('id')->on('agent_price')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tickets_price');
    }
}
