<?php
namespace Strategy;

class CashContentWithFactory
{
    public $cashSiper;

    /**
     * 策略与工厂模式结合
     */
    public function __construct($type = null)
    {
        switch ($type) {
            case "0.8":
                $this->cashSiper = new CashRebate(0.8);
                break;
            case "500-100":
                $this->cashSiper = new CashReturn(500, 100);
                break;
            default:
                $this->cashSiper = new CashNormal;
        }
    }

    public function getReSult($money)
    {
        return $this->cashSiper->acceptCash($money);
    }
}