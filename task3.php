<?php 

// Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
// Fibonacci number is greater than 100, break out of the loop using the break statement.

$f1 = 0;
$f2 = 1;
$n = 10;
echo $f1 . " ";
echo $f2 . " ";
for($i = 1; $i <= $n; $i++) {
    $f3 = $f1 + $f2;
    $f1 = $f2;
    $f2 = $f3;
    if($f3 > 100){
        break;
    }
    echo $f3 . " ";
}
?>