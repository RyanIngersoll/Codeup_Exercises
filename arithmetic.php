<?php

// Fill in the // Add code here blocks to make each function echo the proper result.
// Add code after functions that calls each function with real numbers.
// Verify the output of each test.
// Add a function modulus that finds the modulus of 2 numbers.
// Add test code and verify the output of modulus.

function add($a, $b) {
    echo $a + $b . PHP_EOL;
}

function subtract($a, $b) {
    echo $a - $b . PHP_EOL;
}

function multiply($a, $b) {
    echo $a * $b . PHP_EOL;

}

function divide($a, $b) {
    echo $a / $b . PHP_EOL;
}

function modulus($a, $b) {
    echo $a % $b . PHP_EOL;
}

add(10,10);
subtract(100,1);
multiply(10,10);
divide(50,5);
modulus(5,5);


?>