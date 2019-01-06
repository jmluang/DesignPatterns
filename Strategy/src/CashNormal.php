<?php
namespace Strategy;

class CashNormal implements CashSiper
{
    public function acceptCash(int $money)
    {
        return $money;
    }
}