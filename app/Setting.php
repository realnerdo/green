<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Media;

class Setting extends Model
{
    /**
     * Get the medias associated to the setting
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function medias()
    {
        return $this->belongsToMany('App\Media')
                ->withTimestamps();
    }
}
