<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\User;
use App\Category;
use App\Media;
use App\Quantity;
use App\Review;

class Product extends Model
{
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'title',
        'slug',
        'description',
        'sku',
        'regular_price',
        'sale_price',
        'stock',
        'length',
        'height',
        'width',
        'user_id' // Remove user_id
    ];

    /**
     * Get the seller(user) associated to the product
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
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

    /**
     * A product has many quantities
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quantities()
    {
        return $this->hasMany('App\Quantity');
    }

    /**
     * Get a list of the categories associated with the current product
     *
     * @return array
     */
    public function getCategoryListAttribute()
    {
        return $this->categories->pluck('id')->all();
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
