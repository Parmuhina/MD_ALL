<?php

function createPerson (string $name, string $surname, int $age, string $birthday){
    $person=new stdClass();
    $person->name=$name;
    $person->surname=$surname;
    $person->age=$age;
    $person->birthday=$birthday;
    return $person;
}

$person[]=createPerson("John", "Doe", 50, "25.10.1989");
$person[]=createPerson("Jane", "Doe", 5, "08.11.1991");

foreach ($person as $per){
    echo $per->name.PHP_EOL;
    echo $per->surname.PHP_EOL;
    echo $per->age.PHP_EOL;
    echo $per->birthday.PHP_EOL;
}