<?php
namespace SimpleFactory;

class OperationDiv extends Operation
{
    public function getResult()
    {
        return $this->number1 / $this->number2;
    }
}