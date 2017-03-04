<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

abstract class ObjectType extends Model
{

/**
 * @return \Illuminate\Database\Eloquent\Collection|static[]
 */
 public static function getTypeCollection()
  {

      return self::all();

  }
}
