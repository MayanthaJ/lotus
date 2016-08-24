<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Model;

class CustomerPackage extends Model
{
    public $guarded = ['id'];

    public $table = 'customer_payment';
}
