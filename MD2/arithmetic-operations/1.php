<?php
$numberOne=(int)readline('Insert first number: ');
echo PHP_EOL;
$numberTwo=(int)readline('Insert second number: ');
echo PHP_EOL;

$sum=$numberTwo+$numberOne;
$diference=($numberOne>=$numberTwo) ? $numberOne-$numberTwo: $numberTwo-$numberOne;

if ($numberOne===15 || $numberTwo===15 || $sum===15 || $diference===15){
    echo "true".PHP_EOL;
} else{
    echo 'Try one more time!'.PHP_EOL;
}