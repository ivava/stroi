<?php
/**
 * Created by PhpStorm.
 * User: eva
 * Date: 19.02.17
 * Time: 1:38
 */

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


abstract class BaseUser extends Authenticatable
{
    use Notifiable;

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];
}