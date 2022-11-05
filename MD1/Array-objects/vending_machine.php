<?php
do {
    $yes = (int)readline("Vai gribi ievadīt produktu. Ja ja nospied 1, ja ne nospied 2.");
    if ($yes === 1) {
        $productCash = floatval(readline('Ievadi produkta cenu: '));
        $products[] = $productCash;
    }
}while($yes===1);

    $allMoney=0;
    $coins=[1, 2, 5, 10, 20, 50, 100, 200];
    $allCash=0;
    $atlikums=0;

    foreach ($products as $value){
        $allMoney+=$value;
    }
    $allMoney=$allMoney*100;

    while($allCash<=$allMoney) {
        $coin = floatval(readline("Ievadi monetas daudzumu eiro: ")) * 100;
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
