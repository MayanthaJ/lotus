<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicket extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket',function(Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('customer_id');
            $table->unsignedInteger('country_id');
            $table->date('requested_date');
            $table->integer('qty');
            $table->string('note')->nullable();
            $table->boolean('received')->default(0);
            $table->boolean('terminated')->default(0);
            $table->timestamps();
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
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
        Schema::drop('ticket');
    }
}
