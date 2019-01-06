<?php

use PHPUnit\Framework\TestCase;
use Strategy\CashRebate;

class RebateTest extends TestCase
{
    public function testAcceptCash()
    {
        $money = 100;
        $rate = 0.8;
        $cashRate = new CashRebate($rate);
        $this->assertEquals($money * $rate, $cashRate->acceptCash($money));
    }
}