<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Model;

class Bonus extends Model
{
    public $guarded = ['id'];

    /**
     * Get the bonus type associated with the bonus
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function bonusType() {
        return $this->hasOne(BonusTypes::class, 'id');
    }
}
