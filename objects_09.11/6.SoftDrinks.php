<?php
class SoftDrinks
{
    protected int $surveyed = 12467;
    protected float $purchased_energy_drinks = 0.14;
    protected float $prefer_citrus_drinks = 0.64;

    public function __construct()
    {
        $this->surveyed;
        $this->purchased_energy_drinks;
        $this->prefer_citrus_drinks;
    }

    public function calculate_energy_drinkers()
    {
        $energyDrinks=(int)($this->surveyed * $this->purchased_energy_drinks);
        if (is_float($energyDrinks)===true) {
            throw new LogicException("Result can`t be float.");
        }
        return $energyDrinks;
    }

    public function calculate_prefer_citrus()
    {
        $preferCitrus=(int)($this->surveyed * $this->prefer_citrus_drinks);
        if (is_float($preferCitrus)) {
            throw new LogicException("Result can`t be float.");
        }
        return $preferCitrus;
    }
}
$surveyed=1246700;
$result=new SoftDrinks();
echo "Total number of people surveyed " . $surveyed.PHP_EOL;
    try {
        echo "Approximately " .$result->calculate_energy_drinkers(). " bought at least one energy drink".PHP_EOL;
    } catch (Exception $exception){
        echo "Output exception: ", $exception->getMessage().PHP_EOL;
    }

try {
    echo $result->calculate_prefer_citrus(). " of those " .$surveyed. " prefer citrus flavored energy drinks.".PHP_EOL;
} catch (Exception $exception){
    echo "Output exception: ", $exception->getMessage().PHP_EOL;
}


