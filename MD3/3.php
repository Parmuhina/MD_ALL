<?php
$number=readline('Insert number: ');
echo PHP_EOL;
if(is_numeric($number) && (int)($number>=0)){
    $arrNumber=str_split($number);
    echo "Digit number is equal to: ".count($arrNumber).PHP_EOL;
}else{
    echo "That`s not a number or it is less than zero.".PHP_EOL;
    exit;
}
