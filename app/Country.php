<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\State;

class Country extends Model
{
	/**
	 * Disable timestamps
	 * @var boolean
	 */
	public $timestamps = false;

    /**
     * A Country has many states
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function states() {
        return $this->hasMany('App\State');
    }
}
