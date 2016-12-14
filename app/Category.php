<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Product;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'description'
    ];

    /**
     * Get the products associated to the category
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany('App\Variation')
                ->withTimestamps();
    }
}
