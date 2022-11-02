<?php
$person=new stdClass();
$person->name='Cris';
$person->licence=['small', 'big'];
$person->cash=150;

function createWeapon ($name, $licence, $price){
    $gunsThree=new stdClass();
    $gunsThree->licence=$licence;
    $gunsThree->price=$price;
    $gunsThree->name=$name;
    return $gunsThree;
}

$guns=[
    createWeapon('Pistole', 'small', 50),
    createWeapon('Mausers', 'midle', 80),
    createWeapon('Bazuka', 'big', 100)
];

foreach ($guns as $gun) {
    foreach ($person->licence as $lic) {
        if ($lic === $gun->licence){
            if ($person->cash >= $gun->price){
                echo $person->name . ' can buy gun ' . $gun->name . PHP_EOL;
            } else {
                echo $person->name . ' can`t buy gun ' . $gun->name . PHP_EOL;
            }
        }
    }
}

