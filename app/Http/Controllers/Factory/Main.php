<?php

namespace app\Factory;

class Main
{
    public function main()
    {
        $num1 = 1;
        $num2 = 1;
        $operator = '-';

        try {
            return SampleFactory::createOperator($num1, $num2, $operator)->result();
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }
    }
}