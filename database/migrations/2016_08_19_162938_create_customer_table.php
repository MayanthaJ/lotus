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
            $table->string('otherName');
            $table->integer('age');
            $table->date('dob');
            $table->string('number')->unique();
            $table->string('nic')->unique();
            $table->string('passport');
            $table->string('address1');
            $table->string('address2');
            $table->string('loyalty');
            $table->boolean('terminated');
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
        Schema::drop('customers');
    }
}
