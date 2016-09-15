<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('sname');
            $table->string('lname');
            $table->string('otherName')->nullable();
            $table->integer('age');
            $table->date('dob');
            $table->boolean('gender');
            $table->string('number');
            $table->string('address');
            $table->string('nic')->unique();
            $table->string('passport')->unique();
            $table->unsignedInteger('loyalty_id')->nullable();
            $table->boolean('terminated')->default(0);
            $table->timestamps();
            $table->foreign('loyalty_id')->references('id')->on('loyalty')->onDelete('set null');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customers');
    }
}
