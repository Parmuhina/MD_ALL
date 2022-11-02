<?php
for ($i=1; $i<=3; $i++) {
    $numbers[] = (float)readline("Input the " . $i . "st number: ");
}
echo "The largest number is: ".max($numbers).PHP_EOL;

