<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\LocalObject;

class User extends BaseUser
{

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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getParentLocal()
    {

        return $this->belongsTo(LocalObject::class);

    }
}
