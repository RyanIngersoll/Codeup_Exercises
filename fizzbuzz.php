<?php

/*Write a program that prints the numbers from 1 to 100. But for multiples
 of three print “Fizz” instead of the number and for the multiples of five print 
“Buzz”. For numbers which are multiples of both three and five print “FizzBuzz”.*/

for ($num = 1; $num<= 100; $num++){

	if (($num % 3 == 0) && ($num % 5 == 0)) {
		echo "{$num} - FizzBuzz \n";
	}

	elseif($num % 5 == 0){

		echo "{$num} - Buzz \n";
	}
	elseif($num % 3 == 0){
		echo "{$num} - Fizz \n";
	}	
	else {
	 	echo "{$num} \n";
	}
}

?>

for (i = 1; i < 100; i++){
 echo i%15? i%5? i%3? i: 'fizz': 'buzz': 'fizzbuzz'."\n";
}
