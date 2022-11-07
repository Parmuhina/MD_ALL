<?php
class FuelGauge
{
    public $currentFuelAmount;
    public $currentMileage;
    function __construct($currentFuelAmount,$currentMileage)
    {
        $this->currentFuelAmount=$currentFuelAmount;
        $this->currentMileage=$currentMileage;
    }
    public function intro(){
        echo "Car`s current amount of fuel in liters is : {$this->currentFuelAmount}".PHP_EOL;
    }
    function incrementFuelAmount($amount){
        for($i=1; $i<=$amount; $i++) {
            if ($this->currentFuelAmount < 70) {
                $this->currentFuelAmount++;
            }else{
                echo "Fuel is full.".PHP_EOL;
                break;
            }
        }
    }

    function decrementFuelAmount($amount){
        for($i=1; $i<=$amount; $i++)
        if ($this->currentFuelAmount>0){
            $this->currentFuelAmount--;
        }else{
            echo "Fuel empty.".PHP_EOL;
            break;
        }
    }
}

class Odometer extends FuelGauge
{
    public $currentMileage;
    const KILOMETERS_PER_1LITER_FUEL=10;
    function __construct($currentFuelAmount, $currentMileage)
    {
        parent::__construct($currentFuelAmount,$currentMileage);
    }
    function print(){
        echo "Car`s current amount of mileage is : {$this->currentMileage}".PHP_EOL;
    }
    public function incrementCurrentMileage($amount){
        for ($i=1; $i<=$amount; $i++) {
            if ($this->currentMileage < 999999) {
                $this->currentMileage++;
                $this->intro();
                $this->print();
            }else{
                echo "Odometer is full.".PHP_EOL;
                $this->currentMileage=0;
                $this->intro();
                $this->print();
            }
            if($i%self::KILOMETERS_PER_1LITER_FUEL===0){
                $this->decrementFuelAmount(1);
                $this->intro();
                $this->print();
            }
        }
    }
}

$machine=new Odometer(15, 10000);
$machine->intro();
$machine->incrementFuelAmount(89);
$machine->intro();
$machine->decrementFuelAmount(50);
$machine->intro();
$machine->incrementCurrentMileage(100);