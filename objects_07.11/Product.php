<?php
class Product
{
    public $name;
    public $startPrice;
    public $amount;

    public function __construct(string $name, float $startPrice, int $amount)
    {
        $this->name=$name;
        $this->startPrice=$startPrice;
        $this->amount=$amount;
    }

    function printProduct(){
        echo $this->name. ", ".$this->startPrice.", ".$this->amount." units".PHP_EOL;
    }

    function change($product){

    }
}

$one=new Product("Logitech mouse", 70, 14 );
$one->printProduct();
$two=new Product("iPhone 5s", 999.9, 3 );
$two->printProduct();
$three=new Product("Epson EB-U05", 440.46, 1 );
$three->printProduct();

$yes=readline("If do jou want to change amount press: a. if change price, press p: If you dont want to change, press anything else.");
echo PHP_EOL;
if ($yes==="a"){
    $product=readline("What product do you want to change. Print name.");
}