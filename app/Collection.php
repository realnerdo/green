<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Product;
use App\Media;

class Collection extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'description'
    ];

    /**
     * Get the user associated to the collection
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the products associated to the collection
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany('App\Product')
                ->withTimestamps();
    }

    /**
     * Get the medias associated to the collection
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function medias()
    {
        return $this->belongsToMany('App\Media')
                ->withTimestamps();
    }
}
