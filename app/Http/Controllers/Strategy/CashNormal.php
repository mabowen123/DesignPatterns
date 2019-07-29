<?php

namespace app\Factory;

class CashNormal extends CashSuper
{

    public function algorithm($money)
    {
        return $money;
    }
}