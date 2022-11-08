<?php
class Dog
{
    private string $name;
    private string $sex;
    private $mother;
    private $father;

    public function __construct(string $name, string $sex, $mother=null, $father=null)
    {
        $this->sex=$sex;
        $this->name=$name;
        $this->mother=$mother;
        $this->father=$father;
    }

    public function fathersName (){
        return $this->father;
    }

    public function getName(){
        return$this->name;
    }

    public function getMother(){
        return $this->mother;
    }

    public function sameMother(object $dogOne, object $dogTwo):bool{
        if ($dogOne->getMother()===$dogTwo->getMother()){
            return true;
        }else{
            return false;
        }
    }
}