<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerPayementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_payment',function(Blueprint $table){
            $table->increments('id');
            $table->integer('customer_id');
            $table->double('total_amount');
            $table->double('advance_amount');
            $table->double('net_amount');
            $table->timestamp('created_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customer_payment');
    }
}
