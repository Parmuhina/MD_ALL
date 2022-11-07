<?php
class FizzzBuzz
{
    public $number;
    public function __construct(int $number){
        $this ->number=$number;
    }
    function check(string $number){
        if(is_numeric($number)===false){
            return false;
        }
    }

    function solve(int $numbers){
        for($i=1; $i<=(int)$numbers; $i++) {
            if ((int)$i % 3 === 0 && (int)$i % 5 === 0) {
                echo "FizzBuzz ";
            } elseif ((int)$i % 3 === 0) {
                echo "Fizz ";
            } elseif ((int)$i % 5 === 0) {
                echo "Buzz ";
            } else {
                echo $i . " ";
            }
            if ((int)$i % 20 === 0) {
                echo PHP_EOL;
            }
        }
    }

}

$number = readline('Insert integer number: ');
$play=new FizzzBuzz($number);
while($play->check($number)===false){
    $number = readline('Insert integer number: ');
}

$play->solve((int)$number);




