<?php
// 1) hw_wk1_p1.php

// Create an array of people. Each person should have a 'name', 'phone_number', and 'address'. The 'name' should be an associative array with keys 'first' and 'last'. Make sure there are at least 3 people in the array.

// Loop through the array and produces the following output:

// 1. First Last
//    Phone: 123-123-1234
//    Address: 123 Somewhere Dr. SA, TX 12345

// 2. First Last
//    Phone: 123-123-1234
//    Address: 123 Somewhere Dr. SA, TX 12345
$people = array(
    'Jolie' => array(
        'Last' => 'Ingersoll',
        'phone_number' => '111-1111',
        'address' => '111 Main SA, TX 11111'
    	),
    'Brodie' => array(
        'Last' => 'Ingersoll',
        'phone_number' => '222-2222',
        'address' => '222 Main SA, TX 22222'
    	),
    'Ryan' => array(
        'Last' => 'Ingersoll',
        'phone_number' => '333-3333',
        'address' => '333 Main SA, TX 33333'
    	),
    'Cory' => array(
        'Last' => 'Ingersoll',
        'phone_number' => '444-4444',
        'address' => '444 Main SA, TX 44444'
    	),
    
	);
$i = 1;
foreach ($people as $firstname => $info) {
	echo "-------------------------------------------\n";
	echo "$i" . "." . $firstname . " " . $info['Last'] .  "\n";
	echo "-------------------------------------------\n";
	echo "Phone:  " . $info['phone_number'] .  PHP_EOL;
	echo "Address:  " . $info['address'] .  PHP_EOL;
	$i++;
}

// ...

// 2) hw_wk1_p2.php

// // Create an array that represents a quiz. In the top level array, the keys 
// should be the question numbers and the values should be an associative array.
//  The associative array should have the following keys: 'question', 'answers', 
//  'correct_answer'. The 'question' is a string. The 'answers' is as associative 
//  array with alphabetical keys and string values. The 'correct_answer' is a string 
//  representing the letter of the correct answer. Make sure your quiz has at least 
//  3 questions.

// Loop through the array and produces the following output:

// 1. Question goes here.

//    a. Answer one.
//    b. Answer two.
//   *c. Answer three. (Star before answer denotes that it is correct)
//    d. Answer four.

// ...
// foreach ($quiz as $questionNum => $value){
// 	echo "$questionNum => {$value['question']}\n";
// 	$correctAnswer = "[value['question']}\n";


// 	foreach ($value['answers'] as $answerChoice => $answerContent){
// 		if ($answerChoice == $correctAnswer){
// 		echo "$correctAnswer\n";
// 		}
// 		else {	
// 			echo "\t $answerChoice) $answerContent\n";
// 		}
// 	}

// }

// $quiz is array with 3 keys(question#'s)
// the values of those keys are also arrays
// with keys(question,answers,correct_answer)
// question has one value(the question strin)
// answers has 1 value w/ (array with 4 keys)
// the keys are (A-D) and the values contain 
// the answers.  
// the correct_answer key has 1 value
// (correct answer letter)
$quiz = [
    '1' => ['question' => 'Whats my fav. color?',
        	'answers' => [
        		'A' => 'Answer one',
        		'B' => 'Answer two',
        		'C' => 'Answer three',
        		'D' => 'Answer four'
    			],
    		'correct_answer' => 'A'
    		],
    '2' => ['question' => 'If you set a for loop to search for the 6 fibs of a number sequence,
     what break condition would need to be set?',
      		'answers' => [
        		'A' => 'not sure',
        		'B' => 'break dancing',
        		'C' => 'SIX',
        		'D' => '1 million'
        		],
        	'correct_answer' => 'C'
        	],

    	
    '3' => ['question' => 'When would be a good time to use continue?',
        	'answers' => [
        		'A' => 'During the apocalypse.',
        		'B' => 'Halftime of the Super Bowl.',
        		'C' => 'When your trying to structure a tax shelter.',
        		'D' => 'If only certain items in a for loop sequence are expected to
       		    execute a full block of code.'
    			],
    		'correct_answer' => 'D'
    		]
    ];
// $quiz is array with 3 keys(question#'s)
// the values of those keys are also arrays
// with keys(question,answers,correct_answer)
// question has one value(the question string)
// answers has 1 value w/ (array with 4 keys)
// the keys are (A-D) and the values contain 
// the answers to the question.  
// the correct_answer key has 1 value
// (correct answer letter)

echo " 				QUIZ \n";
echo "|------------------------------------------------------------------|\n";
echo "**  Choose the letter which represents the most correct answer.   **\n";
echo "|------------------------------------------------------------------|\n";

foreach ($quiz as $questionNum => $value) {
		//array      key           value
	echo " \n";
	
	echo "$questionNum. {$value['question']}\n";
	// prints out the question #. and the question
	echo "-------------------------------------------\n";

	$correctAnswer = "{$value['correct_answer']}";
	foreach ($value['answers'] as $answerLetter => $answerContent) {
			   //array                  key           value
		// the value 'answers' contains an array of answers that needs its own foreach loop
		if ($answerLetter == $correctAnswer) {
			echo "\t*$answerLetter)  $answerContent\n";	
		// inserts * next to correct answer in the array of answers
		}
		else {
			echo "\t $answerLetter)  $answerContent\n";
		// prints the incorrect answers
		}
	}
}


?>