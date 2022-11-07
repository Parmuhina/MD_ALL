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
}

$allProducts[]=new Product("Logitech mouse", 70, 14 );
$allProducts[]=new Product("iPhone 5s", 999.9, 3 );
$allProducts[]=new Product("Epson EB-U05", 440.46, 1 );

for($i=0; $i<count($allProducts); $i++) {
    echo ($i+1).". ";
    $allProducts[$i]->printProduct();
}
$yes = readline("If do jou want to change amount press: a.
if change price, press p: If you don`t want to change, press anything else. ");
do {
    $choice=0;
    do {
        $choice = (int)readline('Insert product number from list. ' );
    }while($choice===0);

    if ($yes === "a") {
        do {
            $newAmount=readline('Insert product new amount ');
        }while(is_numeric($newAmount)===false);

        $allProducts[$choice-1]->amount=(int)$newAmount;
    }
    if ($yes === "p") {
        do {
            $newPrice=readline('Insert product new price ');
        }while(is_numeric($newPrice)===false);

        $allProducts[$choice-1]->startPrice=(float)$newPrice;
    }
    for($i=0; $i<count($allProducts); $i++) {
        echo ($i+1).". ";
        $allProducts[$i]->printProduct();
    }
    $yes = readline("If do jou want to change amount press: a.
if change price, press p: If you don`t want to change, press anything else.");
}while($yes==="a" || $yes==="p");