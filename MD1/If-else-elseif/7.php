<?php
$number=80;
switch($number){
    case $number<50:
        echo 'Low'.PHP_EOL;
        break;
    case ($number>50 and $number<100):
        echo 'medium'.PHP_EOL;
        break;
    case $number>100:
        echo 'high'.PHP_EOL;
        break;
}