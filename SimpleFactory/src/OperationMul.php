<?php
namespace SimpleFactory;

class OperationMul extends Operation
{
    public function getResult()
    {
        return $this->number1 * $this->number2;
    }
}
