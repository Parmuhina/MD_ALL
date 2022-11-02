<?php
$person=new stdClass();
$person->name="John";
$person->surname="Doe";
$person->age=50;

function determine($object){
    echo ($object->age>=18)? 'Person reached 18.'.PHP_EOL:'Person are too young, less than 18'.PHP_EOL;
}
determine($person);