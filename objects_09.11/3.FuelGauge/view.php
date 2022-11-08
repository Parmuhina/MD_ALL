<?php
require_once "fuelGauge.php";
require_once "odometer.php";

$odometer=new Odometer (10000);
$fuel=new FuelGauge(3);

//echo $fuel->getCurrentFuelAmount()." fuel amount in machine.".PHP_EOL;
//$fuel->incrementFuelAmount(89);
//echo $fuel->getCurrentFuelAmount()." fuel amount in machine.".PHP_EOL;
//$fuel->decrementFuelAmount(40);
//echo $fuel->getCurrentFuelAmount()." fuel amount in machine.".PHP_EOL;

echo "We will start to drive: ".PHP_EOL;
while($fuel->getCurrentFuelAmount()>0) {
    for($i=1; $i<=11; $i++) {
        echo "Current fuel amount: " . $fuel->getCurrentFuelAmount()."   ";
        echo "Current odometer amount: " . $odometer->getCurrentMileage() . PHP_EOL;
        $odometer->incrementCurrentMileage();
    }
    $fuel->decrementFuelAmount(1);
}