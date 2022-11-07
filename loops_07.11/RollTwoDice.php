<?php
class RollTwoDice
{
    public $sum;

    function set_sum ($sum){
        return $this->sum=$sum;
    }
    function check($sum){
        if(is_numeric($sum)===false || (int)$sum<0 || (int)$sum>12){
            return false;
        }
    }

    function twoNumbers(){
        return [rand(1, 6), rand(1, 6)];
    }
}
$sum=readline("Desired sum: ");
$player=new RollTwoDice();
$player->set_sum($sum);
[$x, $y]=$player->twoNumbers();
while ($player->check($sum)===false){
    echo "Not valid number!".PHP_EOL;
    $sum=readline("Desired sum: ");
}

while(($x+$y)!=(int)$sum){
    echo $x." and ".$y." = ".($x+$y).PHP_EOL;
    [$x, $y]=$player->twoNumbers();
}
echo $x." and ".$y." = ".($x+$y).PHP_EOL;