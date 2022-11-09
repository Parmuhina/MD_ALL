<?php
class SavingAccount
{
    private float $startingBalance;

    public function __construct(float $startingBalance)
    {
        $this->startingBalance = $startingBalance;
    }
    public function getStartingBalance ():float{
        return $this->startingBalance;
    }

    public function minusWithdraw(float $amount):float{
        return $this->startingBalance-=$amount;
    }

    public function addDeposit(float $amount):float{
         return $this->startingBalance+=$amount;
    }

    public function addProcents(float $rate):float{
        return $this->startingBalance+=($this->startingBalance*($rate/12));
    }

}
$moneyInAccount=(int)readline('How much money is in the account? ');
while($moneyInAccount<=0){
  echo "Not correct value: ".PHP_EOL;
  $moneyInAccount = (int)readline('How much money is in the account? ');
}

$annualInterestRate=(int)readline('Enter the annual interest rate: ');
while($annualInterestRate<=0){
    echo "Not correct value: ".PHP_EOL;
    $annualInterestRate = (int)readline('Enter the annual interest rate: ');
}

$howLongOpen=(int)readline('Enter how long  has the account been opened: ');
while($howLongOpen<=0){
    echo "Not correct value: ".PHP_EOL;
    $howLongOpen = (int)readline('Enter how long  has the account been opened: ');
}

$bank=new SavingAccount($moneyInAccount);
$deposited=0;
$withdrawn=0;
$earned=0;

for ($i=1; $i<=(int)$howLongOpen;$i++){

    $plusPerMonth=(int)readline('Enter amount deposited for month ');

    while($plusPerMonth<=0){
        echo "Not correct value: ".PHP_EOL;
        $plusPerMonth= (int)readline('Enter amount deposited for month ');
    }

    $deposited+=$plusPerMonth;

    $bank->addDeposit($plusPerMonth);

    $minusPerMonth=(int)readline('Enter withdraw amount deposit for month .');
    while($minusPerMonth<=0){
        echo "Not correct value: ".PHP_EOL;
        $minusPerMonth= (int)readline('Enter withdraw amount deposit for month');
    }
    $withdrawn+=$minusPerMonth;

    $bank->minusWithdraw($minusPerMonth);

    $earned+=$bank->getStartingBalance()*$annualInterestRate/12;

    $bank->addProcents($annualInterestRate);
}

echo "Total deposited: ".number_format($deposited, 2, ".").PHP_EOL;
echo "Total withdrawn: ".number_format($withdrawn, 2, ".").PHP_EOL;
echo "Interest earned: ".number_format($earned, 2, ".").PHP_EOL;
echo "Ending balance: ".number_format($bank->getStartingBalance(), 2, ".").PHP_EOL;

