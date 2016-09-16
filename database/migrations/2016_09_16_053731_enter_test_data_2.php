<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EnterTestData2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('loyalty')->insert([
            [
                'type' => 'Regular',
                'description' => 'Regular Customers',
                'discount' => '0'
            ],
            [
                'type' => 'Gold',
                'description' => 'Special guess we give 25% discount for them',
                'discount' => '25'
            ],
            [
                'type' => 'silver',
                'description' => 'silver 15% discount for them',
                'discount' => '15'
            ],
            [
                'type' => 'bronze',
                'description' => 'bronze 5% discount for them',
                'discount' => '5'
            ]

        ]);

        //enter details into Packages
        DB::table('package')->insert([
            [
                'code'=>'#0001',
                'name'=>'Dabhadiwa Wandana 8 Days',
                'country'=>'India',
                'destination'=>'Delhi',
                'days'=>'8',
                'price'=>'85000',
                'description'=>'testing inputs'
            ],
            [
                'code'=>'#0002',
                'name'=>'Dabhadiwa Wandana 6 Days',
                'country'=>'India',
                'destination'=>'Delhi',
                'days'=>'6',
                'price'=>'75000',
                'description'=>'testing inputs'
            ],
            [
                'code'=>'#0003',
                'name'=>'Malaysia',
                'country'=>'malaysia',
                'destination'=>'Kuala Lumpur',
                'days'=>'10',
                'price'=>'100000',
                'description'=>'testing inputs'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        return null;
    }
}
