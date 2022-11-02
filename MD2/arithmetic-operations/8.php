<?php
function pay(float $basePay, int $hoursWorked){

   if ($hoursWorked<60 && $basePay>=8){
       if ($hoursWorked<=40) {
           return $hoursWorked*$basePay;
       }else{
           return 40*$basePay+($hoursWorked-40)*(1.5*$basePay);
       }
   }else{
    if($hoursWorked>60 ){return 'WARNING!!! TOO MANY HOURS WORKED!';}
    if ($basePay<8.00){return 'ERROR!!! LESS THAN $8!';}
   }

}

echo "Employee will have be paid ".pay(7.50, 35).PHP_EOL;
echo "Employee will have be paid ".pay(8.20, 47).PHP_EOL;
echo "Employee will have be paid ".pay(10.00, 73).PHP_EOL;



