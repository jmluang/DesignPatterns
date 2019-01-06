<?php
namespace SimpleFactory;

class OperationSub extends Operation
{
    public function getResult()
    {
        return $this->number1 - $this->number2;
    }
}
