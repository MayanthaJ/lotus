<?php

namespace App\Models\Customer;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Customer\customer
 *
 * @mixin \Eloquent
 * @property integer $id
 * @property string $fname
 * @property string $sname
 * @property string $lname
 * @property string $otherName
 * @property integer $age
 * @property string $dob
 * @property string $number
 * @property string $nic
 * @property string $passport
 * @property string $address1
 * @property string $address2
 * @property string $loyalty
 * @property boolean $terminated
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Customer\Customer whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Customer\Customer whereFname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Customer\Customer whereSname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Customer\Customer whereLname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Customer\Customer whereOtherName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Customer\Customer whereAge($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Customer\Customer whereDob($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Customer\Customer whereNumber($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Customer\Customer whereNic($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Customer\Customer wherePassport($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Customer\Customer whereAddress1($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Customer\Customer whereAddress2($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Customer\Customer whereLoyalty($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Customer\Customer whereTerminated($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Customer\Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Customer\Customer whereUpdatedAt($value)
 */
class Customer extends Model
{
    public $guarded = ['id'];

}
