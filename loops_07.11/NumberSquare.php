<?php
class NumberSquare
{
    public $numberMin;
    public $numberMax;
    function __construct($numberMin, $numberMax)
    {
        $this->numberMin=$numberMin;
        $this->numberMax=$numberMax;
    }
    function check($number){
        if(is_numeric($number)===false){
            return false;
        }
    }
    function print($numberMin, $numberMax){
        $allNumbers=[];
        for ($i=$numberMin; $i<=$numberMax; $i++ ){
            $allNumbers[]=$i;
        }
        for ($j=0; $j<count($allNumbers); $j++) {
            for ($i =0; $i <count($allNumbers); $i++) {
                echo $allNumbers[($i+$j)%count($allNumbers)];

            }
            echo PHP_EOL;
        }
    }
}

$numberMin=readline('Insert min number: ');
$numberMax=readline('Insert max number: ');
$game=new NumberSquare($numberMin, $numberMax);
while ($game->check($numberMin)===false){
    echo "Invalid min number: ".PHP_EOL;
    $numberMin=readline('Insert min number: ');
}

while ($game->check($numberMax)===false){
    echo "Invalid max number: ".PHP_EOL;
    $numberMax=readline('Insert max number: ');
}

$game->print($numberMin, $numberMax);