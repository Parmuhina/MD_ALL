<?php
$array=[1, 10.10, 5, 'milk', 10];
for($i=0; $i<count($array); $i++){
    echo is_numeric($array[$i])===true? mult($array[$i]).PHP_EOL:'';
}
function mult ($number){return $number*2;}