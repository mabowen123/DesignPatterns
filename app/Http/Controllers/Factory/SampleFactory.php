<?php


namespace app\Factory;

class SampleFactory
{
    /**
     * @param $num1
     * @param $num2
     * @param $operator
     * @return Operator
     * @throws \Exception
     */
    public static function createOperator($num1, $num2, $operator)
    {
        switch ($operator) {
            case "-":
                $operatorClass = (new OperatorSub($num1, $num2));
                break;
            case "+":
                $operatorClass = (new OperatorAdd($num1, $num2));
                break;
            case "*":
                $operatorClass = (new OperatorMul($num1, $num2));
                break;
            case "/":
                $operatorClass = (new OperatorDiv($num1, $num2));
                break;
            default:
                throw new \Exception('运算符号出错');
        }

        return $operatorClass;
    }
}