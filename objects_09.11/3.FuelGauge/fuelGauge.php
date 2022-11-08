<?php
class FuelGauge
{
    private int $currentFuelAmount;

    public function __construct($currentFuelAmount)
    {
        $this->currentFuelAmount = $currentFuelAmount;
    }

    public function getCurrentFuelAmount(){
        return $this->currentFuelAmount;
    }

    public function incrementFuelAmount(int $amount): int
    {
        for ($i = 1; $i <= $amount; $i++) {
            if ($this->currentFuelAmount < 70) {
                $this->currentFuelAmount++;
            } else {
                break;
            }
        }
        return $this->currentFuelAmount;
    }

    public function decrementFuelAmount(int $amount):int{
        for($i=1; $i<=$amount; $i++) {
            if ($this->currentFuelAmount > 0) {
                $this->currentFuelAmount--;
            } else {
                break;
            }
        }
        return $this->currentFuelAmount;
    }
}