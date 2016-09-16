<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Customer\CustomerAddress
 *
 * @property integer $customer_id
 * @property string $address
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Customer\CustomerAddress whereCustomerId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Customer\CustomerAddress whereAddress($value)
 * @mixin \Eloquent
 */
class CustomerAddress extends Model
{
    public $table='customer_address';
}
