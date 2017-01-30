<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\City;

class Region extends Model
{
    protected $fillable = ['name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users() {
        return $this->hasMany(User::class);
    }
    public function cities() {
        return $this->hasMany(City::class);
    }
}
