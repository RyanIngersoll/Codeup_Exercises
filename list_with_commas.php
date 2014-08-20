<?php
// 
// array_push() — Push one or more elements onto the end of array
// array_pop() — Pop the element off the end of array
// array_shift() — Shift an element completely OFF the beginning of array
// array_unshift() — Prepend one or more elements to the beginning of an array
// 
// Create a new file named list_with_commas.php in your exercises repo to solve
//  these exercises. Commit and push each step.

// Using the $physicists_array and your new knowledge of pushing, popping, exploding, 
// and imploding:

// Create the $famous_fake_physicists string that lists the physicists and contains 
// the "and" at the end.

// This should end with this line:

//  echo "Some of the most famous fictional theoretical physicists are
//   {$famous_fake_physicists}.";
// and output this result:

//  Some of the most famous fictional theoretical physicists are Gordon Freeman, 
//  Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, and Tony Stark.
// Turn your solution into a function named humanized_list(). You should be able 
// to pass the $physicists_array as the only argument, and your function will return the result.

// Update your code to list the physicists by first name, in alphabetical order.
// Create a second argument to make alphabetical sorting optional.
// Default alphabetical sorting to false. If no args are passed, no sorting takes place.

// 


 function humanized_list($string, $alphabetize = false) {
 	$array = explode(', ', $string);
 	// turns string into array

 	//var_dump($array);

 	if($alphabetize == TRUE){
 		asort($array);
 		// gives option to alphabatize the array
 	}

 	//var_dump($array);

 	$lastItem = array_pop($array);
 	//puts last item in array into seperate variable we use latter

 	$humanizedList = implode(', ', $array);
 	// converts array without last item back into string form.
 	$humanizedString =  $humanizedList . " and " . $lastItem . PHP_EOL;
 	// manipulates original string to include 'and' before the seperated last item
 	return $humanizedString;
  
 }

 $physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, 
 Bruce Banner, Tony Stark';



$famous_fake_physicists = humanized_list($physicists_string, TRUE);

 // Output sentence
 echo "Some of the most famous fictional theoretical physicists are 
 {$famous_fake_physicists}" . PHP_EOL;



?>