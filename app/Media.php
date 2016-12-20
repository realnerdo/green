<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Collection;
use App\Page;
use App\Products;
use App\User;
use Cviebrock\EloquentSluggable\Sluggable;

class Media extends Model
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

    protected $table = 'medias';
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'original_name', 'url', 'type'
    ];

    /**
     * Get the collections associated to the media
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function collections()
    {
        return $this->belongsToMany('App\Collection')
                ->withTimestamps();
    }

    /**
     * Get the pages associated to the media
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function pages()
    {
        return $this->belongsToMany('App\Page')
                ->withTimestamps();
    }

    /**
     * Get the products associated to the media
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function products()
    {
        return $this->belongsToMany('App\Product')
                ->withTimestamps();
    }

    /**
     * Get the users associated to the media
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('App\User')
                ->withTimestamps();
    }
}
