<?php

// Fill in the // Add code here blocks to make each function echo the proper result.
// Add code after functions that calls each function with real numbers.
// Verify the output of each test.
// Add a function modulus that finds the modulus of 2 numbers.
// Add test code and verify the output of modulus.
//----------------------------------------------------------------------------------
// Validate all the arguments, and display an error if the input is not numeric.
// Validate divide by 0 errors, display error if attempts to divide by 0 are made.
// Make the error messages show the values of the arguments.
// Refactor the error messages into their own function, have the other functions use it for error messaging.

function nonNumericError($a, $b){
	echo " must type a number " . PHP_EOL;
	echo var_dump($a);
	echo var_dump($b);
}

function nonZeroError($a, $b){
	echo " do not divide by zero or you will die " . PHP_EOL;
	echo var_dump($a);
	echo var_dump($b);
}



function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b . PHP_EOL;
    }
    else{
    	nonNumericError($a, $b);
    	
    }
    	
}

function subtract($a, $b) {
     if (is_numeric($a) && is_numeric($b)) {
    	echo $a - $b . PHP_EOL;
    }
    else{
    	nonNumericError($a, $b);
    }
}

function multiply($a, $b) {
     if (is_numeric($a) && is_numeric($b)) {
    	echo $a * $b . PHP_EOL;
    }
    else{
    	nonNumericError($a, $b);
    }

}

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b) && $b!=0) {
    	echo $a % $b . PHP_EOL;
    }

    elseif (is_numeric($a) && is_numeric($b) && $b ==0)
    	nonZeroError($a, $b);

    else {
    	nonNumericError($a, $b);
    }

}


function modulus($a, $b) {
     if (is_numeric($a) && is_numeric($b) && $b!=0) {
    	echo $a / $b . PHP_EOL;
    }

    elseif (is_numeric($a) && is_numeric($b) && $b ==0)
    	nonZeroError($a, $b);

    else {
    	nonNumericError($a, $b);
    }

}


add(10,'fred');
subtract(100,1);
multiply(10,10);
divide(50,0);
modulus(0,0);




?>