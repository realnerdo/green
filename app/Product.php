<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Variation;
use App\Category;
use App\Media;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'description'
    ];

    /**
     * Get the seller(user) associated to the product
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function seller()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the variations associated to the product
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function variations()
    {
        return $this->belongsToMany('App\Variation')
                ->withTimestamps();
    }

    /**
     * Get the categories associated to the product
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany('App\Category')
                ->withTimestamps();
    }

    /**
     * Get the medias associated to the product
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function medias()
    {
        return $this->belongsToMany('App\Media')
                ->withTimestamps();
    }
}
