<?php
//$yes=(int)readline("Vai gribi ievadīt produktu. Ja ja nospied 1, ja ne nospied 2.");
//if ($yes===1) {
  //  $productName = readline("Ievadi producta nosaukumu: ");
    //$productCash = floatval(readline('Īevadi produkta cenu: '));
    //$products+=[$productName=>$productCash];
    //}
//if($yes===2){

    $products=["Milk" => 0.25, "Bread" =>0.63, "Potatoes" => 0.50];
    $allMoney=0;
    $coins=[1, 2, 5, 10, 20, 50, 100, 200];
    $allCash=0;
    $atlikums=0;

    foreach ($products as $key => $value){
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
