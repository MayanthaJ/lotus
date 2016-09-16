<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentalCusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rental_cuses', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('name');
            $table->string('nic');
            $table->string('phone');
            $table->string('email');
            $table->boolean('terminated');
            $table->string('loyalty');
            $table->string('last_reservation_date');
            $table->timestamps('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rental_cuses');
    }
}
