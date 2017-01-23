<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\City;
use App\Country;

class State extends Model
{
    /**
     * Disable timestamps
     * @var boolean
     */
    public $timestamps = false;

    /**
     * A State has many cities
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cities() {
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
