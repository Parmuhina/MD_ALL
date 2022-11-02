<?php
$number=readline('Insert number: ');
echo PHP_EOL;
var_dump($number);
if (is_numeric($number)===false){
    echo "That`s not a number".PHP_EOL;
    exit;
}else{
    echo (floatval($number)<0) ? 'Number is negative'.PHP_EOL:'Number is positive'.PHP_EOL;
}
