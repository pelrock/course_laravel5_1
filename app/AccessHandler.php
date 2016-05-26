<?php
/**
 * Created by PhpStorm.
 * User: amartinsa
 * Date: 10/05/16
 * Time: 18:07
 */

namespace App;


class AccessHandler
{
    protected static $hierarchy=[
        'admin'     => 100,
        'editor'    => 50,
        'user'      => 10
    ];
    public static function check ($userRole, $requiredRole)
    {
        return static::$hierarchy[$userRole] >= static::$hierarchy[$requiredRole];
    }
}