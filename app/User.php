<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Cart;
use App\Collection;
use App\Media;
use App\Product;
use App\Profile;
use App\Address;
use App\Box;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /**
     * Get the profile associated to the user
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile() {
        return $this->hasOne('App\Profile');
    }

    /**
     * Get the addresses associated to the user
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function addresses() {
        return $this->hasMany('App\Address');
    }

    /**
     * Get the products associated to the user
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Product');
    }

    /**
     * Get the collections associated to the user
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function collections()
    {
        return $this->hasMany('App\Collection');
    }

    /**
     * Get the medias associated to the user
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function medias()
    {
        return $this->belongsToMany('App\Media')
                ->withTimestamps();
    }

    /**
     * A user can have one cart
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cart()
    {
        return $this->hasOne('App\Cart');
    }

    public function boxes()
    {
        return $this->hasMany('App\Box');
    }
}
