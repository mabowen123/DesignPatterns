<?php


namespace app\Decorator;


class Person implements Display
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
    {
        return "{$this->name} 当前装备:";
    }
}