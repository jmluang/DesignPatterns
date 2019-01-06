<?php
namespace Strategy;

class CashReturn implements CashSiper
{
    /**
     * 返利条件
     */
    private $moneyCondition;

    /**
     * 返利值
     */
    private $moneyReturn;

    /**
     * 返利收费，初始化时必须输入返利条件和返利值，比如满300反100，则 moneyCondition 为300
     * $moneyReturn 为100
     */
    public function __construct($moneyCondition, $moneyReturn)
    {
        $this->moneyCondition = $moneyCondition;
        $this->moneyReturn = $moneyReturn;
    }

    public function acceptCash(int $money)
    {
        if ($money >= $this->moneyCondition) {
            $rate = $money / $this->moneyCondition * $this->moneyReturn;
            return $money - $rate;
        }
        return $money;
    }
}