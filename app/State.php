<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\City;
use App\Country;

class State extends Model
{
    /**
     * A State has many cities
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function states() {
        return $this->hasMany('App\City');
    }

    /**
     * Get the Country associated to the state
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country() {
        return $this->belongsTo('App\Country');
    }
}
