<?php

function newObject(string $name, int $price){
    $object=new stdClass();
    $object->name=$name;
    $object->price=$price;
    return $object;
}
$allProducts=[
    newObject("Capuchino", 126 ),
    newObject("Tea", 150),
    newObject('Espresso', 100),
    newObject("Cacao", 150)
];
$coins=[200=>50, 100=>50, 50=>50, 20=>50, 10=>50, 5=>50, 2=>50, 1=>50];
do {
    $choice=0;
    $allCash=0;
    $atlikums=0;
    for($i=0; $i<count($allProducts); $i++){
        echo ($i+1).". ".$allProducts[$i]->name.", price is ".$allProducts[$i]->price/100;
        echo PHP_EOL;
    }

    do {
        $choice = (int)readline('Insert your choice in integer number: ');
        if ($choice <= 0 || $choice > count($allProducts)) {
            echo "Not correct value. Insert new one.: " . PHP_EOL;
        }
    } while ($choice <= 0 || $choice > count($allProducts));

    while ($allCash < $allProducts[($choice - 1)]->price) {
        $coin = (int)readline("Insert coin amount in cents: ");
        foreach ($coins as $key => $value) {
            $count = 0;
            if ($coin === $key) {
                $allCash += $coin;

            } else {
                $count++;
            }
            if ($count === count($allProducts)) {
                echo "Not correct coin amount." . PHP_EOL;
                continue;
            }
        }
    }

    $atlikums = $allCash - $allProducts[($choice - 1)]->price;

    foreach ($coins as $key => $value) {
        echo "Coin {$key} is equal to " . intdiv($atlikums, $key) . ", coin amount is " . $value - intdiv($atlikums, $key) . PHP_EOL;
        $atlikums -= ($key * intdiv($atlikums, $key));
        $coins[$key]=intdiv($atlikums, $key);
    }
    $ins=readline("Do you want to choose product. If yes, print: y. If no, print something else.");
}while($ins==="y");
