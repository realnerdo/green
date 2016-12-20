<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Product;
use App\Variation;

class Meta extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'sku', 'regular_price', 'sale_price', 'stock'
    ];

    /**
     * Get the product associated to the meta
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function product() {
        return $this->hasOne('App\Product');
    }

    /**
     * Get the variation associated to the meta
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function variation() {
        return $this->hasOne('App\Variation');
    }
}
