<?php
$numberFirst=array();
$numberSecond=array();
for ($i=0; $i<10; $i++){
    $numberFirst[]=rand(1, 100);
    $numberSecond[]=$numberFirst[$i];
}
$replacement=array((count($numberFirst)-1) => -7);
$basket=array_replace($numberFirst, $replacement);
echo "Array 1: ";
for($i=0; $i<count($numberFirst); $i++){
    echo $basket[$i]." ";
}
echo PHP_EOL;
echo "Array 2: ";
for ($i=0; $i<count($numberSecond); $i++){
    echo $numberSecond[$i]." ";
}
echo PHP_EOL;
