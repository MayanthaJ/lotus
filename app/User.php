<?php

namespace App;

use App\Models\Employee\AdminTypes;
use App\Models\Employee\EmployeeType;
use App\Models\Employee\TimeSheet;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * App\User
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Employee\AdminTypes[] $admin
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Employee\TimeSheet[] $timesheet
 * @property-read mixed $type_lists
 * @mixin \Eloquent
 * @property integer $id
 * @property string $name
 * @property string $lastname
 * @property string $email
 * @property string $password
 * @property string $nic
 * @property float $basic
 * @property boolean $gender
 * @property boolean $terminated
 * @property string $hired_date
 * @property string $terminated_date
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereLastname($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereNic($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereBasic($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereGender($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereTerminated($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereHiredDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereTerminatedDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 */
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the user's admin types
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function admin()
    {
        return $this->belongsToMany(AdminTypes::class, 'admin_type_user', 'user_id', 'admin_type_id');
    }

    /**
     * Get user's time sheets ( per day )
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function timesheet()
    {
        return $this->hasMany(TimeSheet::class, 'user_id');
    }


    public function employee_type()
    {
        return $this->belongsToMany(EmployeeType::class, 'employee_type_user', 'user_id');
    }

    /**
     * @return mixed
     */
    public function getTypeListsAttribute()
    {
        return $this->admin->pluck('id')->all();
    }

    public function getEmployeeTypesAttribute()
    {
        return $this->employee_type->pluck('id')->all();
    }

}
