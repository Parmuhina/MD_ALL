<?php
class AsciiFigure
{
    public $number;
    function set_number($number)
    {
        $this->number=$number;
    }
    function check ($number){
        if(is_numeric($number)===false){
            return false;
        }
    }
    function draw ($number){

        $halfLength=($number-1)*4;
        for($i=0; $i<=$number-1; $i++){
            echo str_repeat("/", $halfLength-($i*4)).str_repeat("*", ($i*8));
            echo str_repeat(chr(92), $halfLength-($i*4)).PHP_EOL;
        }
    }
}
$asciiFigure=new AsciiFigure();
$number=readline('Insert number in integer: ');
$asciiFigure->set_number($number);
while($asciiFigure->check($number)===false){
    $number=readline('Insert number in integer: ');
}
$asciiFigure->draw($number);
