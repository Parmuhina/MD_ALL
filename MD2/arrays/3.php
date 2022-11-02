<?php
$numbers=[
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];
echo "Enter the value to search for: ";
$value=(int)readline();
echo PHP_EOL;
echo (in_array($value,$numbers)) ? 'Hey! It`s in array!'.PHP_EOL:'Sorry, but it isn`t in array!'.PHP_EOL;