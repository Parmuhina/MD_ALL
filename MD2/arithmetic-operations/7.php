<?php
$acceleration=-9.81;
$time=10;
$initialVelocity=0;
$initialPosition=0;
$gravity=0;

$gravity=0.5*$acceleration*$time*$time+$initialVelocity*$time+$initialPosition;
echo $gravity.PHP_EOL;