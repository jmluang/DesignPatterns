<?php

use PHPUnit\Framework\TestCase;
use SimpleFactory\OperationFactory;
use Strategy\CashContentWithFactory as CashContent;

class StrategyWithFactoryTest extends TestCase
{
    public function testCash()
    {
        $total = 500;

        $cashContent = new CashContent();
        $this->assertEquals($total, $cashContent->getReSult($total));

        $rate = "0.8";
        $cashContent = new CashContent($rate);
        $this->assertEquals($total * 0.8, $cashContent->getReSult($total));

        $return = "500-100";
        $cashContent = new CashContent($return);
        $this->assertEquals($total - 100, $cashContent->getReSult($total));
    }
}
