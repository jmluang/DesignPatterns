<?php

use PHPUnit\Framework\TestCase;
use SimpleFactory\OperationFactory;
use Strategy\CashNormal;
use Strategy\CashContent;
use Strategy\CashRebate;
use Strategy\CashReturn;

class StrategyTest extends TestCase
{
    public function testCash()
    {
        $total = 500;

        $cashContent = new CashContent(new CashNormal);
        $this->assertEquals($total, $cashContent->getReSult($total));

        $rate = 0.8;
        $cashContent = new CashContent(new CashRebate($rate));
        $this->assertEquals($total * $rate, $cashContent->getReSult($total));

        $return = 100;
        $cashContent = new CashContent(new CashReturn($total, $return));
        $this->assertEquals($total - $return, $cashContent->getReSult($total));
    }
}
