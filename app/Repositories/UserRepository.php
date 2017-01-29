<?php
/**
 * Created by PhpStorm.
 * User: Ann
 * Date: 29.01.2017
 * Time: 10:41
 */

namespace app\Repositories;

use app\User;
use app\Region;


class UserRepository
{

    public function getAllUsersInRegion(Region $region) {
        return User::where('region', $region->name)->orderBy('created_at', 'asc')->get();
    }

}