<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\City;

class Profile extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'phone',
        'address',
        'zipcode',
        'rfc',
        'clabe',
        'company',
        'city_id'
    ];

    /**
     * Get the user associated to the profile
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the city associated to the profile
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city() {
        return $this->belongsTo('App\City');
    }
}
