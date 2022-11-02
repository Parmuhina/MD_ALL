<?php

$days=["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
$dayNumber=readline("Insert number from 0 to 6: ");
echo PHP_EOL;
if (is_numeric($dayNumber)){
        if ((int)$dayNumber >= 0 && (int)$dayNumber <= 6) {
            echo $days[$dayNumber] . PHP_EOL;
        } else {
            echo "Not a valid day." . PHP_EOL;
        }
    }else{
    echo "That`s not a number.".PHP_EOL;
}
