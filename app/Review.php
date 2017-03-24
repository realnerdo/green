<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Review extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['rating', 'review'];

    public function product()
    {
    	return $this->belongsTo('App\Product');
    }
}
