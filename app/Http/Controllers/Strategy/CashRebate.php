<?php
namespace app\Factory;


class CashRebate extends CashSuper
{
    private $discount;

    public function __construct($discount)
    {
        $this->discount = $discount;
    }

    public function algorithm($money)
    {
        return $money * $this->discount;
    }
}