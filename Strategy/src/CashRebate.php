<?php
namespace Strategy;

class CashRebate implements CashSiper
{
    private $moneyRate;

    public function __construct($rate)
    {
        $this->moneyRate = $rate;
    }

    /**
     * 打折收费
     */
    public function acceptCash(int $money)
    {
        return $money * $this->moneyRate;
    }
}