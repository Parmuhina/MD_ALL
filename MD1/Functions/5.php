<?php
$array=[
  ["fruit"=>'apple',
    "weight"=>5],
  ["fruit"=>'pomelo',
      "weight"=>15],
  ["fruit"=>'blueberry',
      "weight"=>50]
];

function determine ($array){
    $cost=array();
    for ($i=0; $i<count($array); $i++) {
        if ($array[$i]["weight"]>10){
            array_push($cost,2);
        }else{
            array_push($cost,1);
        }
    }
    $y=0;
    foreach ($array as $arr){
        echo 'Fruit '.$arr["fruit"].' would be cost '.$cost[$y].PHP_EOL;
        $y++;}
}

determine($array);