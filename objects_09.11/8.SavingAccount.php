<?php
class SavingAccount
{
    private int $startingBalance;

    public function __construct(int $startingBalance)
    {
        $this->startingBalance = $startingBalance;
    }
    public function getStartingBalance ():float{
        return $this->startingBalance;
    }

    public function minusWithdraw(float $amount){
        return $this->startingBalance-=$amount;
    }

    public function addDeposit(float $amount, object $bank){
         return $this->startingBalance+$amount;
    }

    public function addProcents(float $rate){
        return ($this->startingBalance+($this->startingBalance*($rate/12)));
    }

}
$moneyInAccount=readline('How much money is in the account? ');
while(is_numeric($moneyInAccount)===false || (float)$moneyInAccount<=0){
    echo "Not correct value: ".PHP_EOL;
    $moneyInAccount = readline('How much money is in the account? ');
}

$annualInterestRate=readline('Enter the annual interest rate: ');
while(is_numeric($annualInterestRate)===false || (float)$annualInterestRate<=0){
    echo "Not correct value: ".PHP_EOL;
    $annualInterestRate = readline('Enter the annual interest rate: ');
}

$howLongOpen=readline('Enter how long  has the account been opened: ');
while(is_numeric($howLongOpen)===false || (float)$howLongOpen<=0){
    echo "Not correct value: ".PHP_EOL;
    $howLongOpen = readline('Enter how long  has the account been opened: ');
}

$bank=new SavingAccount((int)$moneyInAccount);
$deposited=0;
$withdrawn=0;
$earned=0;

for ($i=1; $i<=(int)$howLongOpen;$i++){
    $plusPerMonth=(int)readline('Enter amount deposited for month ');
    while(is_numeric($plusPerMonth)===false || (float)$plusPerMonth=0){
        echo "Not correct value: ".PHP_EOL;
        $plusPerMonth= readline('Enter amount deposited for month ');
    }
    var_dump($plusPerMonth);
    $deposited+=(int)$plusPerMonth;

    $bank->addDeposit((int)$plusPerMonth, $bank);

    $minusPerMonth=readline('Enter withdraw amount deposit for month .');
    while(is_numeric($minusPerMonth)===false || (float)$minusPerMonth=0){
        echo "Not correct value: ".PHP_EOL;
        $minusPerMonth= readline('Enter withdraw amount deposit for month');
    }
    $withdrawn+=(int)$minusPerMonth;
    $bank->minusWithdraw((int)$minusPerMonth, $bank);

    $earned+=$bank->getStartingBalance()*(int)$annualInterestRate/12;
    $bank->addProcents((int)$annualInterestRate);

}

echo "Total deposited: ".$deposited.PHP_EOL;
echo "Total withdrawn: ".$withdrawn.PHP_EOL;
echo "Interest earned: ".$earned.PHP_EOL;
echo "Ending balance: ".$bank->getStartingBalance().PHP_EOL;

