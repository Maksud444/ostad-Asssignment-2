<?php
    // Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
// this 15 as an argument of a function and use a for loop to generate these numbers and print
// them by calling the function.

function fibonacciNum($count){
    $number1 = 0;
    $number2 = 1;
    echo "fibonacci Numbers: ";
 
    for($i = 0; $i < $count; $i++){
        echo $number1 . " ";
        $number3 = $number1 + $number2;
        $number1 = $number2;
        $number2 = $number3;
    }
 }
 
 fibonacciNum(15);
?>