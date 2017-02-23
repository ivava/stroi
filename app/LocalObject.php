<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use App\User;
class LocalObject extends BaseModel
{
    /**
     *
     */
    const REGION = 'region';


    /**
     * @var string mysql table
     */
    protected $table = 'local_objects';

    /**
     * @param $type
     * @return Collection
     */
    public static function getObjectByType($type)
    {

        return self::where('type', $type)->get();

    }

    /**
     * @param $id
     * @return Collection
     */
    public function getChild()
    {

        return self::where('parent_id', $this->id);

    }

    /**
     * @param $parent_id
     * @return LocalObject
     */
    public function getParent()
    {

        return $this->parent_id;

    }

    public function getUsers()
    {

        return $this->hasMany(User::class);

    }
}
