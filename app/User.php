<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Region;
use App\City;
use App\Departament;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','position','isAdmin','parent_user','departament','region',
        'city'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getRegion() {
        return $this->belongsTo(Region::class, 'region');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getCity() {
        return $this->belongsTo(City::class, 'city');
    }


    /**\
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getDepartament() {
        return $this->belongsTo(Departament::class, 'departament');
    }
}
