<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cart;
use App\Product;

class Quantity extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['quantity', 'product_id', 'cart_id'];

    public function cart()
    {
        return $this->belongsTo('App\Cart');
    }

    public function product()
    {
        return $this->belongsTo('App\Product');
    }
}
