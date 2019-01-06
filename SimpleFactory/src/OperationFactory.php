<?php

namespace SimpleFactory;

class OperationFactory
{
    public static function createOperation(string $operator)
    {
        switch ($operator) {
            case "+":
                return new OperationAdd;
            case "-":
                return new OperationSub;
            case "*":
                return new OperationMul;
            case "/":
                return new OperationDiv;
            default:
                return new Operation;
        }
    }
}
