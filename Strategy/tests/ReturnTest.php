<?php

use PHPUnit\Framework\TestCase;
use Strategy\CashReturn;

class ReturnTest extends TestCase
{
    public function testAcceptCash()
    {
        $money = 200;
        $return = 100;
        $cashRate = new CashReturn($money, $return);
        $this->assertEquals($money - $return, $cashRate->acceptCash($money));
    }
}