<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 3/4/17
 * Time: 8:09 PM
 */

namespace App;



class LocaleType extends ObjectType
{

    const TYPES = [
        'region' => [
            'alias' => 'region',
            'name' => 'регион'
        ]
    ];

    /**
     * @return array
     */
    public static function getTypes()
    {

        return self::TYPES;

    }

}