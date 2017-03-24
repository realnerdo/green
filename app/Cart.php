<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Quantity;

class Cart extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'session',
        'subtotal',
        'service_fee',
        'shipping_fee',
        'conekta_fee'
    ];

    /**
     * A cart belongs to one user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * A cart has many items
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quantities()
    {
        return $this->hasMany('App\Quantity');
    }
}
