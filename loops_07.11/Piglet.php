<?php
class Piglet
{
    public $answer;
    public function __construct(string $answer)
    {
        $this->answer=$answer;
    }

    public static function check (string $answer){
        if($answer==="y"){
            return true;
        }
    }

    public static function roll(){
        return rand(1,10);;
    }
}


echo "Welcome to piglet!".PHP_EOL;
$answer = readline('Ŗoll again? Insert y if yes, else, if no.\'');

$sum=0;
while(Piglet::check($answer)){
    $points=Piglet::roll();
    echo "You rolled a ".$points."!".PHP_EOL;
    $sum+=$points;
    if($points===1){
        echo "You got 0 points.".PHP_EOL;
        exit;
    }
    $answer = readline('Ŗoll again? Insert y if yes, else, if no.');
}
echo "You got {$sum} points.".PHP_EOL;
