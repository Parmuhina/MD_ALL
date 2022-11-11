<?php
require_once "dog.php";
class DogTest
{
    public function Main()
    { $dogs=[
        new Dog("Max", "male", "Lady", "Rocky");
        new Dog ("Rocky", "male", "Molly", "Sam");
        new Dog ("Sparky", "male");
        new Dog("Buster", "male", "Lady", "Sparky");
        new Dog("Sam", "male");
        new Dog("Lady", "female");
        new Dog("Molly", "female");
        new Dog ("Coco", "female", "Molly", "Buster");
            ]
        echo ($coco->fathersName()===null)? 'Unknown'.PHP_EOL :$coco->fathersName().PHP_EOL;
        echo ($sparky->fathersName()===null)? 'Unknown'.PHP_EOL :$sparky->fathersName().PHP_EOL;

        if ($max->sameMother($coco, $rocky)){
            echo $coco->getName()." has same name as ".$rocky->getName().PHP_EOL;
        }else{
            echo $coco->getName()." hasn`t same name as ".$rocky->getName().PHP_EOL;
        }
    }

}
$result=new DogTest();
$result->Main();