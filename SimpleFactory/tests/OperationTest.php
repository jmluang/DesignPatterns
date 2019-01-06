<?php

use PHPUnit\Framework\TestCase;
use SimpleFactory\OperationFactory;

class OperationTest extends TestCase
{
    public function testAdd()
    {
        $operation = OperationFactory::createOperation("+");
        $operation->number1 = 1;
        $operation->number2 = 2;
        $this->assertEquals($operation->number1 + $operation->number2, $operation->getResult());
    }

    public function testSub()
    {
        $operation = OperationFactory::createOperation("-");
        $operation->number1 = 1;
        $operation->number2 = 2;
        $this->assertEquals($operation->number1 - $operation->number2, $operation->getResult());
    }

    public function testMul()
    {
        $operation = OperationFactory::createOperation("*");
        $operation->number1 = 1;
        $operation->number2 = 2;
        $this->assertEquals($operation->number1 * $operation->number2, $operation->getResult());
    }

    public function testDiv()
    {
        $operation = OperationFactory::createOperation("/");
        $operation->number1 = 1;
        $operation->number2 = 2;
        $this->assertEquals($operation->number1 / $operation->number2, $operation->getResult());
    }


}
