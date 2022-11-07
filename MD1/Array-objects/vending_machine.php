<?php
do {
    $yes = readline("Vai gribi ievadīt produktu. Ja ja nospied 1, ja ne nospied 2.");
    if ((int)$yes === 1 ) {
        $productCash = readline('Ievadi produkta cenu: ');
        if(is_numeric($productCash)) {
            $products[] = (int)$productCash;
        }else{
            echo "Nepareiza vertiba: ".PHP_EOL;
            continue;
        }
    }
}while((int)$yes===1 || (int)$yes!=2);

    $allMoney=0;
    $coins=[1, 2, 5, 10, 20, 50, 100, 200];
    $allCash=0;
    $products=[];
    $atlikums=0;
    foreach ($products as $value){
        $allMoney+=$value;
    }

    while($allCash<=$allMoney) {
        $coin = (int)readline("Ievadi ievadito monetas daudzumu centos: ");
        if (in_array($coin, $coins)) {
            $allCash += $coin;
        } else {
            echo "Nepareizs daudzums" . PHP_EOL;
            continue;
        }
    }

    $atlikums=$allCash-$allMoney;

    for ($i=count($coins)-1; $i>=0; $i--){
        $counter=0;
        while($atlikums>=$coins[$i]){
            $counter++;
            $atlikums-=$coins[$i];
        }
        echo "Coin {$coins[$i]} is equal to {$counter}".PHP_EOL;

    }
