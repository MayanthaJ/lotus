<?php

namespace App;

use App\Models\Employee\AdminTypes;
use App\Models\Employee\TimeSheet;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

    /**
     * @return mixed
     */
    public function typeListsAttribute()
    {
        return $this->admin->pluck('id')->all();
    }
}
