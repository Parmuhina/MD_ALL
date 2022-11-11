<?php
require_once "Account.php";
$bartos_account = new Account("Barto's account", 100.00);
$bartos_swiss_account = new Account("Barto's account in Switzerland", 1000000.00);

echo "Initial state".PHP_EOL;
$bartos_account->printAccount();
$bartos_swiss_account->printAccount();

$bartos_account->withdrawal(20);
echo "Barto's account balance is now: " . $bartos_account->numberFormat($bartos_account->getBalance()).PHP_EOL;
$bartos_swiss_account->deposit(200);
echo "Barto's Swiss account balance is now: ".$bartos_swiss_account->numberFormat($bartos_swiss_account->getBalance()).PHP_EOL;

echo "Final state".PHP_EOL;
$bartos_account->printAccount();
$bartos_swiss_account->printAccount();

$matt=new Account("Matt`s account", 1000);
$my= new Account("My account", 0);

//$matt->withdrawal(100);
//$my->deposit(100);

$matt->transfer($matt, $my, 100);
echo "Final Matt`s and My states".PHP_EOL;
$matt->printAccount();
$my->printAccount();

echo "Completing: ".PHP_EOL;
$a=new Account("A", 100);
$b=new Account("B", 0);
$c=new Account("C", 0);
$a->transfer($a, $b, 50);
$b->transfer($b, $c, 25);
$a->printAccount();
$b->printAccount();
$c->printAccount();