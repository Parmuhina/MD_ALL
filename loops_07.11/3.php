<?php
do {
    $wordOne = readline('Insert first word: ');
    echo PHP_EOL;
    $wordTwo = readline('Insert second word: ');
    echo PHP_EOL;
    if(strlen($wordOne)+strlen($wordTwo)>30){
        echo "Too long words.".PHP_EOL;
    }
}while(strlen($wordOne)+strlen($wordTwo)>30);
echo $wordOne.str_repeat(".",(30-strlen($wordOne)-strlen($wordTwo))).$wordTwo.PHP_EOL;
