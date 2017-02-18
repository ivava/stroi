<?php
/**
 * Created by PhpStorm.
 * User: Ann
 * Date: 15.02.2017
 * Time: 21:43
 */

namespace App;


use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class BaseModel extends Model
{

    public $timestamps = false;


    /**
     * @return mixed
     */
    abstract function getParent();

    /**
     * @return mixed
     */
    abstract function getChild();


    /**
     * @param array $fillable
     */
    public function setFillable($fillable)  {

        $this->fillable = $fillable;

    }

    /**
     * @return array
     */
    public function getFillable()   {

        return parent::getFillable();

    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getUsers() {

        return $this->hasMany(User::class);

    }

    /**
     * @return mixed
     */
    public function getType() {

        return $this->type;

    }

    /**
     * @param {string} $type
     * @return Collection
     */
    abstract function getObjectsByType($type);
}