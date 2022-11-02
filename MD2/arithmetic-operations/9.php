<?php
$weight=(float)readline('Your weight in kilos: ');
$height=(float)readline('Your height in meters: ');

function kiloToPounds (float $kilo): float{
    return $kilo*2.20462;
}
function metersToInches(float $meters): float{
    return $meters/0.0254;
}
$index=kiloToPounds($weight)*703/metersToInches($height)/metersToInches($height);

if ($index>=18.5 && $index<=25){
    echo 'You are in optimal weight'.PHP_EOL;
}elseif ($index<18.5){
    echo 'You are in underweight'.PHP_EOL;
}else{
    echo 'You are in overweight'.PHP_EOL;
}
