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
            $table->string('otherName')->nullable(0);
            $table->integer('age');
            $table->date('dob');
            $table->boolean('gender');
            $table->string('number');
            $table->string('nic')->unique();
            $table->boolean('passport');
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->integer('loyalty');
            $table->boolean('terminated')->default(0);
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
