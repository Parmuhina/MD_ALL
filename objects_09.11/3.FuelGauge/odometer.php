<?php
class Odometer
{
    private int $currentMileage;
    const KILOMETERS_PER_1LITER_FUEL=10;
    function __construct(int $currentMileage)
    {
        $this->currentMileage=$currentMileage;
    }
    public function getCurrentMileage ():int{
        return $this->currentMileage;
    }

    public function incrementCurrentMileage():void{
        if ($this->currentMileage < 999999) {
            $this->currentMileage++;
        }else{
            $this->currentMileage=0;
        }
    }
}