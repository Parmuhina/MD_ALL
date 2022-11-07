<?php
class Point
{
    public $x;
    public $y;
    function __construct($x, $y){
        $this->x=$x;
        $this->y=$y;
    }
    function swapPoints($p1, $p2){
        list($p1->x, $p2->x)=array($p2->x, $p1->x);
        list($p1->y, $p2->y)=array($p2->y, $p1->y);

    }
}
$p1=new Point (5, 2);
$p2= new Point (-3, 6);

$p1->swapPoints($p1, $p2);

echo "(". $p1->x. ", ".$p1->y.")".PHP_EOL;
echo "(". $p2->x. ", ".$p2->y.")".PHP_EOL;