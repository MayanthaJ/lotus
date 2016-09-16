<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_order',function(Blueprint $table){
            $table->increments('id');
            $table->string('code');
            $table->unsignedInteger('agent');
            $table->string('name');
            $table->string('departing');
            $table->string('departing_to');
            $table->string('return_from');
            $table->string("return_to");
            $table->date("depature_date");
            $table->time('depature_time');
            $table->date('return_date');
            $table->time('return_time');
            $table->integer('adults');
            $table->integer('children');
            $table->integer('infant');
            $table->string('note');
            $table->integer('qty');
            $table->float('discount');
            $table->float('amount');
            $table->float('advance');
            $table->float('remaining_amount');
            $table->boolean('terminated')->default(0);
            $table->date('created');
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
        Schema::drop('ticket_order');
    }
}
