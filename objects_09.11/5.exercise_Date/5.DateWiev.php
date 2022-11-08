<?php
require_once '5.Date.php';
require_once '5.DateTest.php';

$daysValueShort=[1=>31, 2=>28, 3=>31, 4=>30, 5=>31, 6=>30, 7=>31, 8=>31, 9=>30, 10=>31, 11=>30, 12=>31];
$daysValueLong=[1=>31, 2=>29, 3=>31, 4=>30, 5=>31, 6=>30, 7=>31, 8=>31, 9=>30, 10=>31, 11=>30, 12=>31];

$month=(int)readline('Insert month value: ');
while ($month<=0 || $month>12){
    echo "Not correct value.".PHP_EOL;
    $month=(int)readline('Insert month value: ');
}

$year=(int)readline('Insert year value: ');
while ($year<=0){
    echo "Not correct value.".PHP_EOL;
    $year=(int)readline('Insert year value: ');
}

$day=(int)readline('Insert day value: ');
if ($year%4===0){
    while ($day<=0 || $daysValueLong[$month]<$day) {
        echo "Not correct value." . PHP_EOL;
        $day = (int)readline('Insert day value: ');
    }
}
if ($year%4!=0){
    while ($day<=0 || $daysValueShort[$month]<$day) {
        echo "Not correct value. " . PHP_EOL;
        $day = (int)readline('Insert day value: ');
    }
}

$date=new Date($month, $day, $year);
echo $date->displayDate().PHP_EOL;

echo (testDay($day)) ? "DAY INTEGER".PHP_EOL: "SOMEHING WRONG".PHP_EOL;
echo (testYear($year)) ? "YEAR INTEGER".PHP_EOL: "SOMEHING WRONG".PHP_EOL;
echo (testMonth($month)) ? "MONTH INTEGER".PHP_EOL: "SOMEHING WRONG".PHP_EOL;

echo (testOutput($date->displayDate(), $year, $month, $day)) ? "DATE CORRECT".PHP_EOL: "SOMEHING WRONG".PHP_EOL;

