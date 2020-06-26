<?php

namespace App\Patern;

class MyClass extends Singleton
{
    private $counter = 0;

    public function getCounter()
    {
        return $this->counter;
    }

    public  function increase()
    {
        return "Hello";
    }

    public function hello()
    {
        return "Hello";
    }
}
