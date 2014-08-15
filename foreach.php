<?php
// Create a file named foreach.php in you exercises directory. 
// Commit each step and push to GitHub.
// Construct a loop that iterates through each value and outputs 
// its type as either integer, float, boolean, array, null, or string.
// Construct a loop that iterates through each value and outputs
//  only values with a type that is scalar.
// Create a loop that will echo out every value, including those
//  nested in arrays. Output should look like this.

// Sgt. Pepper
//  11

//  Array
//  3.14
//  12 + 7

//  11

$things = array('Sgt. Pepper', "11",
 null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach($things as $dataType) {
	if (is_numeric($dataType)) {
        echo "{$dataType}\n";
	}
	
	elseif (is_bool($dataType)){
		echo " \n";
	}
	elseif (is_array($dataType)){
		echo "array\n";
	}
	elseif (is_null($dataType)){
		echo " \n";
	}
	elseif (is_string($dataType)){
		echo "{$dataType}\n";
	}
	else {
		echo "something weird\n";
	}
}
// if (is_numeric($datum)) {
//         echo "{$datum} is a number\n";
?>
