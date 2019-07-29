<?php

namespace app\Factory;


class OperatorSub extends Operator
{
    public function result()
    {
        return $this->num1 - $this->num2;
    }
}