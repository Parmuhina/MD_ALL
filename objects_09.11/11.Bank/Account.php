<?php

class Account
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    public function printAccount():void
    {
        echo $this->name. ", ". $this->numberFormat($this->balance).PHP_EOL;
    }

    public function withdrawal(float $value):float
    {
        return $this->balance-=$value;
    }

    public function numberFormat(float $money):string
    {
        return number_format($money, 2, ".");
    }

    public function getBalance ():float
    {
        return $this->balance;
    }

    public function deposit (float $value): float
    {
        return $this->balance+=$value;
    }

    public function transfer (Account $from, Account $to, float $howMuch):void
    {
        $from->withdrawal($howMuch);
        $to->deposit($howMuch);
    }

}

