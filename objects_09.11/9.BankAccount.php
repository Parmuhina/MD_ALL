<?php
class BankAccount
{
    private float $money;
    private string $name;

    public function __construct(float $money, string $name)
    {
        $this->money=$money;
        $this->name=$name;
    }

    public function show_user_name_and_balance ():string{
        if($this->money<0) {
            return "{$this->name}".", -$".abs($this->money).PHP_EOL;
        }else{
            return "{$this->name}".", $".$this->money.PHP_EOL;
        }
    }
}

$ben=new BankAccount(17.25, "Benson");
echo $ben->show_user_name_and_balance();
