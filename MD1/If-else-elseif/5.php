<?php
$int=70;
$y=100;
$z=60;

if ($y<$z){
    echo ($int>=$y and $int<=$z)? 'correct'.PHP_EOL: PHP_EOL;
}elseif ($y>$z){
    $k=$y;
    $y=$z;
    $z=$k;
    echo ($int>=$y and $int<=$z)? 'correct'.PHP_EOL: PHP_EOL;
}else{echo 'Variables are equal, not range';}