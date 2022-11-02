<?php
$numbers=array(12, 13, 15, 16, 18, 21);
foreach ($numbers as $int){
    echo $int%3===0 ? "$int".PHP_EOL:'';
}