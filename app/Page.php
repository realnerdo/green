<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Media;

class Page extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'description'
    ];

    /**
     * Get the medias associated to the page
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function medias()
    {
        return $this->belongsToMany('App\Media')
                ->withTimestamps();
    }
}
