<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Region;

class City extends Model
{
    protected $fillable = ['name', 'region'];


    /**
     * Получить всех пользователей в данном городе
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function User() {
       return $this->hasMany(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Region() {
        return $this->belongsTo(Region::class);
    }
}
