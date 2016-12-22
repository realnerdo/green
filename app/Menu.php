<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Link;

class Menu extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'description'
    ];

    /**
     * Get the links associated to the given menu
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function links()
    {
        return $this->belongsToMany('App\Link')
                ->withTimestamps();
    }
}
