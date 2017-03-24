<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Box extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'name',
        'length',
        'height',
        'width'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
