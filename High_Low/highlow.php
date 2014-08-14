<?php

/* The specs for the game are:

game picks a random number between 1 and 100.
prompts user to guess the number
if user's guess is less than the number, it outputs "HIGHER"
if user's guess is more than the number, it outputs "LOWER"
if a user guesses the number, the game should declare "GOOD GUESS!"
Hints:

Using conditionals and loops here is important
Random numbers can be made with the internal rand() function
If user is right, tell them they won
While they are wrong, give them hints and keep asking
Use exit(0) to end the game
If you get stuck in game, ctrl-c will exit.

Look up mt_rand() on php.net and use it in place of rand().
Display number of guesses it gook after outputting 'Good Guess!'

*/

fwrite(STDOUT, "WELCOME to HIGH/LOW\n");


if ($argc > 1) {
	$randomNumber = mt_rand($argv[1],$argv[2]);
	fwrite(STDOUT," min = $argv[1] max = $argv[2] ");

	fwrite(STDOUT, "Please guess a number between $argv[1] and $argv[2]\n");
}
else{
	$randomNumber = mt_rand(1,100);
	fwrite(STDOUT, "Please guess a number between 1 and 100\n");
}


	$numGuesses = 0;
	$numWins = 0;


usleep(50000);
fwrite(STDOUT, "To exit game type exit(0), if stuck hit ctrl-c\n");

usleep(50000);



$guess = trim(fgets(STDIN));

usleep(50000);

do{

	if ($guess<$randomNumber) {
		fwrite(STDOUT, "sorry but your WAY off, try a little higher\n");
		$numGuesses++;
		fwrite(STDOUT, "your number of guesses = $numGuesses \n");
		fwrite(STDOUT, "guess again \n");
		$guess = trim(fgets(STDIN));
		
	}

	elseif ($guess>$randomNumber) {
		fwrite(STDOUT, "sorry but your WAY off, try a little lower\n");
		$numGuesses++;
		fwrite(STDOUT, "your number of guesses = $numGuesses \n");
		fwrite(STDOUT, "guess again \n");
		$guess = trim(fgets(STDIN));
		
	}

	else {
		fwrite(STDOUT, "your AMAZING, great guess\n");
		$numGuesses++;
		$numWins++;
		usleep(50000);
		fwrite(STDOUT, "you got it after only $numGuesses guesses\n");
		usleep(50000);
		die();
		/*fwrite(STDOUT, "do you want to play again, yes or no?\n");
		$playAgain = trim(fgets(STDIN));
		usleep(50000);

			if ($playAgain == "no") {
				die();
			}
			else ($playAgain == "yes") {
	
				$randomNumber = mt_rand(1, 100);
				fwrite(STDOUT, "Please guess a new number between 1 and 100.\n");
				$guess = trim(fgets(STDIN));
				
			}*/

		}

} 
while ($numGuesses <= 100);






/* echo " input/ output\n";


// Write the output
// Notice the space after the ?
fwrite(STDOUT, 'What is your first name? ');
usleep(50000);

// Get the input from user
$first_name = fgets(STDIN);

// Output the user's name
fwrite(STDOUT, "Hello $first_name\n");

fwrite(STDOUT, 'do you want to play global warfare? yes or no ');
usleep(50000);

$answer = fgets(STDIN);
fwrite(STDOUT, "you answered: $answer\n");
usleep(50000);
fwrite(STDOUT, "nice choice\n");

if ($answer == 'yes'){
	fwrite(STDOUT, "enter game now...\n ur in GTNW\n");

}*/



?>