<?php
$count=0;

for ($i=1; $i<=110; $i++){
    echo ($count%11===0)? PHP_EOL: '';
    switch($i) {
        case $i%3===0 && $i%5===0 && $i%7===0:
            echo 'CozaLozaWoza ';
            $count++;
            break;
        case $i%3===0 && $i%5===0:
            echo 'CozaLoza ';
            $count++;
            break;
        case $i%5===0 && $i%7===0:
            echo 'LozaWoza ';
            $count++;
            break;
        case $i%3===0 && $i%7===0:
            echo 'CozaWoza ';
            $count++;
            break;
        case $i%3===0:
            echo 'Coza ';
            $count++;
            break;
        case $i%5===0:
            echo 'Loza ';
            $count++;
            break;
        case $i%7===0:
            echo 'Woza ';
            $count++;
            break;
        default:
            echo $i.' ';
            $count++;
            break;
    }
}
echo PHP_EOL;