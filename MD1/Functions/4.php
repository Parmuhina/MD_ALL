<?php
$person=new stdClass();
$person->name="John";
$person->surname="Doe";
$person->age=50;

$person1=new stdClass();
$person1->name="Johsh";
$person1->surname="Doe";
$person1->age=15;

$objArray=[$person, $person1];

function determine($object){
    return ($object->age>=18)? 'Person reached 18.'.PHP_EOL:'Person are too young, less than 18'.PHP_EOL;
}
foreach ($objArray as $obj){
    echo determine($obj);
}

