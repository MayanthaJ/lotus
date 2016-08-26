<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours',function (Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('package_id');
            $table->unsignedInteger('hotel_id');
            $table->unsignedInteger('guide_id');
            $table->string('name');
            $table->date('departure');
            $table->time('time');
            $table->string('description');
            $table->integer('coustomer_count')->default(40);
            $table->timestamps();
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->foreign('guide_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('package_id')->references('id')->on('package')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('tours');
    }
}
