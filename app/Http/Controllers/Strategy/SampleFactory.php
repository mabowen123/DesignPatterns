<?php


namespace app\Factory;

class SampleFactory
{
    /**
     * @param $type
     * @return CashSuper
     * @throws \Exception
     */
    public static function createCashContext($type)
    {
        switch ($type) {
            case 'normal':
                $cashSuper = new CashNormal();
                break;
            case 'return 100':
                $cashSuper = new CashReturn(300, 100);
                break;
            case '0.8':
                $cashSuper = new CashRebate(0.8);
                break;
            default:
                throw new \Exception('参数错误');
                break;
        }

        return $cashSuper;
    }

    /**
     * @param $type
     * @param $money
     * @return mixed
     * @throws \Exception
     */
    public static function getResult($type, $money)
    {
        return self::createCashContext($type)->algorithm($money);
    }
}