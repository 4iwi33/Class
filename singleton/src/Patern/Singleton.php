<?php

namespace App\Patern;

abstract class Singleton
{
    private static $instance = null; // инст = нулю
    final public function __construct()
    {
    }

    public static function createInstance()
    {
        if (self::$instance === null) {
            self::$instance = new static(); //статич связывание
        }
        return self::$instance;
    }
}
