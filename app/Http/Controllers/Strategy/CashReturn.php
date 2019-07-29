<?php

namespace app\Factory;


class CashReturn extends CashSuper
{
    private $satisfy;
    private $return;

    public function __construct($satisfy, $return)
    {
        $this->satisfy = $satisfy;
        $this->return = $return;
    }

    public function algorithm($money)
    {
        return $money > $this->satisfy ? $money - $this->satisfy : $money;
    }
}