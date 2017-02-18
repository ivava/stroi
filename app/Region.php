<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\City;
use App\Departament;

class Region extends BaseModel
{
    protected $fillable = ['name'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
   public function getChild()
   {
       return $this->hasMany(City::class);
   }


    /**
     * @return bool
     */
   public function getParent()
   {
       return false;
   }
}
