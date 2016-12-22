<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Page;
use App\Menu;

class Link extends Model
{
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'url'
    ];

    /**
     * Get the profile associated to the user
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function page()
    {
        return $this->hasOne('App\Page');
    }

    /**
     * Get the menus associated to the given link
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function menus()
    {
        return $this->belongsToMany('App\Menu')
                ->withTimestamps();
    }

}
