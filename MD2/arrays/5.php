<?php
$space=[];


function work (array $space) {
    foreach ($space as $sp){
        foreach ($sp as $s){
            echo $s." ";
        }
        echo PHP_EOL;
    }
}

function check (array $place) {
    foreach ($place as $pl){
        if ($pl<0 || $pl>=3 || is_numeric($pl)===false){
            echo "Value can`t be like this.".PHP_EOL;
            exit;
        }
    }
}

function winner(array $space){

    foreach ($space as $sp) {
        $count = 0;
        foreach ($sp as $s) {
            if($s === "X"){
                $count++;
            }elseif($s==="O") {
                $count--;
            }
        }
        if ($count === 3) {
            echo "Congratuations winner is 'X'." . PHP_EOL;
            exit;
        } elseif ($count === -3) {
            echo "Congratuations winner is 'O'." . PHP_EOL;
            exit;
        }
    }
    for ($r=0; $r<3; $r++) {
        $count = 0;
        for ($i = 0; $i < 3; $i++) {
            if($space[$i][$r] === "X"){
                $count++;
            }elseif($space[$i][$r] ==="O") {
                $count--;
            }
        }
        if ($count === 3) {
            echo "Congratuations winner is 'X'." . PHP_EOL;
            exit;
        } elseif ($count === -3) {
            echo "Congratuations winner is 'O'." . PHP_EOL;
            exit;
        }

    }


    $count = 0;
    for ($i = 0; $i < 3; $i++) {
        if($space[$i][$i] === "X"){
            $count++;
        }elseif($space[$i][$i] ==="O") {
            $count--;
        }
    }

    if ($count === 3) {
        echo "Congratuations winner is 'X'." . PHP_EOL;
        exit;
    } elseif ($count === -3) {
        echo "Congratuations winner is 'O'." . PHP_EOL;
        exit;
    }

    $count=0;

            if($space[0][2] === "X" && $space[1][1]==="X" && $space[2][0]==="X"){
                $count=3;
            }elseif($space[0][2] === "O" && $space[1][1]==="O" && $space[2][0]==="O") {
                $count=-3;
            }
    if ($count === 3) {
        echo "Congratuations winner is 'X'." . PHP_EOL;
        exit;
    } elseif ($count === -3) {
        echo "Congratuations winner is 'O'." . PHP_EOL;
        exit;
    }
}

echo ('... a game already in progress!').PHP_EOL;
work($space=[["-", "-", "-"], ["-", "-", "-"], ["-", "-", "-"]]);

echo 'Ŗandomize who will go "X" or "O"'.PHP_EOL;
$start=rand(1,2);
$x="X";
$y="O";

if ($start===1){
    for ($i=1; $i<=9; $i++) {
        if($i%2===1){
            $place=readline("'".$x."'─ choose your location (row, column): ");
            echo PHP_EOL;
            $coordinates=explode(" ", $place);
            check($coordinates);
            $space[(int)$coordinates[0]][(int)$coordinates[1]]=$x;
            work($space);
            winner($space);
            if ($i===9) {
                echo "The game is a tie." . PHP_EOL;
                exit;
            }
        }else{
            $place=readline("'".$y."'─ choose your location (row, column): ");
            echo PHP_EOL;
            $coordinates=explode(" ", $place);
            check($coordinates);
            $space[(int)$coordinates[0]][(int)$coordinates[1]]=$y;
            work($space);
            winner($space);
            if ($i===9) {
                echo "The game is a tie." . PHP_EOL;
                exit;
            }
        }
    }
}else{
    for ($j=1; $j<=9; $j++) {
        if($j%2===1){
            $place=readline("'".$y."'─ choose your location (row, column): ");
            echo PHP_EOL;
            $coordinates=explode(" ", $place);
            check($coordinates);
            $space[(int)$coordinates[0]][(int)$coordinates[1]]=$y;
            work($space);
            winner($space);
            if ($j===9) {
                echo "The game is a tie." . PHP_EOL;
                exit;
            }
        }else{
            $place=readline("'".$x."'─ choose your location (row, column): ");
            echo PHP_EOL;
            $coordinates=explode(" ", $place);
            check($coordinates);
            $space[(int)$coordinates[0]][(int)$coordinates[1]]=$x;
            work($space);
            winner($space);
        }
        if ($j===9) {
            echo "The game is a tie." . PHP_EOL;
            exit;
        }
    }
}
