<?php

function testYear (int $year):bool{
    return (is_int($year))? true : false;
}

function testMonth (int $month):bool{
    return (is_int($month))? true : false;
}

function testDay (int $day):bool{
    return (is_int($day))? true : false;
}

function testOutput (string $date, int $year, int $month, int $day):bool {
    return ($date=== ($month."/".$day."/".$year))? true: false;
}