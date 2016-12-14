<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;

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
        'company'
    ];

    /**
     * Get the user associated to the profile
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo('App\User');
    }
}
