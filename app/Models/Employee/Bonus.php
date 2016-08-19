<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Employee\Bonus
 *
 * @property-read \App\Models\Employee\BonusTypes $bonusType
 * @mixin \Eloquent
 */
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
