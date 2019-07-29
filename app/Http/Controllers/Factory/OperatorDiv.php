<?php

namespace app\Factory;
class OperatorDiv extends Operator
{
    public function result()
    {
        if ($this->num2 == 0) {
            throw new \Exception('num2不能为0');
        }

        return $this->num1 / $this->num2;
    }
}