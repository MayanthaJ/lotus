<?php

namespace App\Models\Accounts;

use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    public $guarded = ['id'];

    public function billType()
    {
        return $this->hasOne(BillsType::class, 'id');
    }

}
