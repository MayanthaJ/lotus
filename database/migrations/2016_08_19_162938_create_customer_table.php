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
            $table->string('number');
            $table->string('nic')->unique();
            $table->string('passport');
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('loyalty');
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
