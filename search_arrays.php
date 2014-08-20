<?php

// $names = ['Marc Andreessen', 'Tim Berners-Lee', 'Len Bosack', 'Steve Case', 'Vint Cerf', 'Len Kleinrock', 'J.C.R. Licklider', 'Bob Metcalfe', 'Ray Tomlinson'];

// $query = 'Tim Berners-Lee';

// $result = array_search($query, $names);

// if ($result) {
//     echo $names[$result];
// }
//  1 = (assigns)
//  2 == (compares value)
//  3 === (compares value & type)
//---------------------------------------------------------------------------------------


// first names
 $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

 $compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// Create a function that returns TRUE or FALSE if an array value is found.
//  Search for Tina and Bob in $names. Make sure it works as expected.
// Create a function to compare 2 arrays that returns the number of values 
// in common between the arrays. Use the 2 example arrays and make sure your solution 
// uses array_search().

 function nameSearch($query, $names){
 	$result = array_search($query, $names);
 	
 	//$result === FALSE ? 'FALSE':'TRUE';
 	if($result === FALSE){
 	return FALSE;
 }
 	else {
 		return TRUE;

 	}
 }

 function nameCompare($array1, $array2){
 	$i = 0;
 	foreach ($array1 as $name)  {
 		// if each nameSearch for array1 is also found in array 2, count ++
 		if (nameSearch($name, $array2)){
 			$i++;
 		}
	}
	echo "name matches = " . $i . PHP_EOL;

}

 var_dump(nameSearch('Tina', $names));
 var_dump(nameSearch('Bob', $names));
 nameCompare($names, $compare);



?>