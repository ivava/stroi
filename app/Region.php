<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\City;
use App\Departament;

class Region extends Model
{
    protected $fillable = ['name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users() {
        return $this->hasMany(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cities() {
        return $this->hasMany(City::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function departaments() {
        return $this->hasMany(Departament::class);
    }
}
