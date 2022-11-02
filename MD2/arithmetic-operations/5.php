<?php
$randomNumber=rand(1,100);
$guessedNumber=(int)readline('Ī`m thinking of a number between 1-100. Try to guess it. ');

if($randomNumber===$guessedNumber){
    echo 'You guessed it! What are the odds?!?'.PHP_EOL;
}elseif ($randomNumber<$guessedNumber){
    echo 'Sorry, you are too high. I was thinking of '.$randomNumber.PHP_EOL;
}else{
    echo 'Sorry, you are too low. I was thinking of '.$randomNumber.PHP_EOL;
}
