<?php

$products=["Milk" => 0.25, "Bread" =>0.63, "Potatoe" => 0.50];
$allMoney=0;
foreach ($products as $key => $value){
    $allMoney+=$value;
}
$allMoney=$allMoney*100;
$coins=[1, 2, 5, 10, 20, 50, 100, 200];
for ($i=count($coins)-1; $i>=0; $i--){
    $counter=0;
    while($allMoney>=$coins[$i]){
        $counter++;
        $allMoney-=$coins[$i];
    }
    echo "Coin {$coins[$i]} is equal to {$counter}".PHP_EOL;


}