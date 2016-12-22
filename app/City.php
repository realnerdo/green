<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\State;

class City extends Model
{
    /**
     * Get the State associated to the City
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function state() {
        return $this->belongsTo('App\State');
    }
}
