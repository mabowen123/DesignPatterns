<?php

namespace app\Factory;

class OperatorAdd extends Operator
{
    public function result()
    {
        return $this->num1 + $this->num2;
    }
}