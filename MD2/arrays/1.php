<?php
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

//todo
echo "Original numeric array: [ ";
for ($i=0; $i<count($numbers)-1; $i++){
    echo $numbers[$i].', ';
}
echo $numbers[count($numbers)-1].' ].'.PHP_EOL;

//todo
echo "Sorted numeric array: [ ";
sort($numbers);
for ($i=0; $i<count($numbers)-1; $i++){
    echo $numbers[$i].', ';
}
echo $numbers[count($numbers)-1].' ].'.PHP_EOL;

$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

//todo
echo "Original string array: [ ";
for ($i=0; $i<count($words)-1; $i++){
    echo $words[$i].', ';
}
echo $words[count($words)-1].' ].'.PHP_EOL;

//todo
echo "Sorted string array: [ ";
rsort($words);
for ($i=0; $i<count($words)-1; $i++){
    echo $words[$i].', ';
}
echo $words[count($words)-1].' ].'.PHP_EOL;