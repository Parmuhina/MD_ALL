<?php
do {
    $numberTerms = readline('Insert number of terms: ');
    echo PHP_EOL;
    $number = readline('Insert number ');
    echo PHP_EOL;
}while(is_numeric($number)===false && is_numeric($numberTerms)===false);

$result=1;
for ($i=1; $i<=$numberTerms; $i++){
    $result*=$number;
}
echo "Result is equal to: ".$result.PHP_EOL;