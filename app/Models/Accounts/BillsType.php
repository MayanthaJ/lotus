<?php

namespace App\Models\Accounts;

use Illuminate\Database\Eloquent\Model;

class BillsType extends Model
{
    public $guarded = ['id'];

    public function bills()
    {
        return $this->hasMany(Bills::class, 'billtype_id');
    }

}
