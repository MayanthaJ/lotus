<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Customer\CustomerNumber
 *
 * @property integer $customer_id
 * @property string $number
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Customer\CustomerNumber whereCustomerId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Customer\CustomerNumber whereNumber($value)
 * @mixin \Eloquent
 */
class CustomerNumber extends Model
{
    public $table ='customer_number';
}
