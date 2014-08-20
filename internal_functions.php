<?php
$nothing = NULL;
$something = '';
$array = array(1,2,3);
// Create a function that checks if a variable is set or empty, 
//and display "$variable_name is SET|EMPTY"

// TEST: If var $nothing is set, display '$nothing is SET'

// TEST: If var $nothing is empty, display '$nothing is EMPTY'

// TEST: If var $something is set, display '$something is SET'

// Serialize the array $array, and output the results

// Unserialize the array $array, and output the results

function isDefined($a){

	if (is_array($a)){
		var_dump($a) . PHP_EOL;
		
	}
	elseif(isset($a)){
		echo '$a is SET' . PHP_EOL;
	}

	else {
		echo '$a is EMPTY' . PHP_EOL;
	}
}

$nothing = 10;
$something = 'Ryan';
$array = array(1,2,3);

isDefined($nothing);
isDefined($something);
isDefined($array);

echo serialize($array) . PHP_EOL;
$serializedArray = serialize($array);
var_dump($serializedArray);

$unserializedArray = unserialize($serializedArray);
var_dump($unserializedArray);







?>