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
     * @param array $fillable
     */
    public function setFillable($fillable)  {

        $this->fillable = $fillable;

    }

    /**
     * @return array
     */
    public function getFillable()
    {

        return parent::getFillable();

    }



}