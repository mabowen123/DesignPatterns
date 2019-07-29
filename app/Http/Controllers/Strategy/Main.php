<?php


namespace app\Factory;

class Main
{
    public function main()
    {
        $type = 'normal';
        $money = 100;
        return SampleFactory::getResult($type, $money);
    }
}