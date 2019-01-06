<?php
namespace Strategy;

class CashContent
{
    public $cashSiper;

    public function __construct(CashSiper $cashSiper)
    {
        $this->cashSiper = $cashSiper;
    }

    public function getReSult($money)
    {
        return $this->cashSiper->acceptCash($money);
    }
}
