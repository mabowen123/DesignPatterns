<?php
namespace app\Factory;

class OperatorMul extends Operator
{
    public function result()
    {
        return $this->num1 * $this->num2;
    }
}