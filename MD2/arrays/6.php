<?php
$words=['lapsa', 'math', 'saule'];
$minreizes=0;
$wrong=0;
$misses=[];
$word=$words[rand(0,count($words)-1)];

for ($i=1; $i<=strlen($word); $i++){
    echo '-';
}
echo PHP_EOL;

$arrayw=str_split($word);

foreach($arrayw as $array){$arraynull[]='-';};

while(in_array('-',$arraynull) and $minreizes<strlen($word)+3 and $wrong<3) {
    $burts = readline('Ievadi minamo burtu: ');
    echo PHP_EOL;
    $minreizes++;

    if (in_array($burts,$arrayw)){
        $keys=array_keys($arrayw,$burts);
        foreach ($keys as $key){
            $arraynull[$key]=$burts;
        }
    }else{

        $misses[]=$burts;
        $wrong++;
    }
    echo "Word: ".implode('', $arraynull) . PHP_EOL;
    echo "Misses: ".implode('', $misses).PHP_EOL;
}
echo ($wrong>=3)? 'Nepaveicās.'.PHP_EOL: 'Tu uzmineji!'.PHP_EOL;







