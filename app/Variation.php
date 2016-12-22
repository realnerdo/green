<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Product;
use App\Meta;
use Cviebrock\EloquentSluggable\Sluggable;

class Variation extends Model
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
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'description'
    ];

    /**
     * Get the products associated to the variation
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany('App\Product')
                ->withTimestamps();
    }

    /**
     * Get the metadata associated to the variation
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function meta()
    {
        return $this->hasOne('App\Meta');
    }
}
