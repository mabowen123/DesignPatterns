<?php


namespace app\Decorator;


class Finery
{
    protected $person;

    public function decorate(Person $person)
    {
        $this->person = $person;
    }

    public function show()
    {

    }
}