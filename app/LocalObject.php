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
    const REGION_TYPE = 'region';


    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'parent_id',
        'lead_id',
        'type'
    ];

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
     * @return array
     */
    public static function getAllLocalObjects()
    {

        $regions = self::getObjectByType(self::REGION_TYPE);

        return array(
            'regions' => $regions
        );

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


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function getUsers()
    {

        return $this->hasMany(User::class, 'local_id');

    }


}
