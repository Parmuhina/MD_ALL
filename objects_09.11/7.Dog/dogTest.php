<?php
require_once "dog.php";
class DogTest
{
    public function Main()
    {
        $max=new Dog("Max", "male", "Lady", "Rocky");
        $rocky=new Dog ("Rocky", "male", "Molly", "Sam");
        $sparky=new Dog ("Sparky", "male");
        $buster=new Dog("Buster", "male", "Lady", "Sparky");
        $sam=new Dog("Sam", "male");
        $lady=new Dog("Lady", "female");
        $molly=new Dog("Molly", "female");
        $coco=new Dog ("Coco", "female", "Molly", "Buster");

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