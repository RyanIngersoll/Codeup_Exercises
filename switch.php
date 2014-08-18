// <?php

// $value = 'Hello!';

// switch (gettype($value)) {
//     case 'integer':
//         echo '$value is an integer';
//         break;
//     case 'float':
//         echo '$value is a float';
//         break;
//     case 'boolean':
//         echo '$value is a boolean';
//         break;
//     case 'array':
//         echo '$value is an array';
//         break;
//     case 'null':
//         echo '$value is null';
//         break;
//     case 'string':
//         echo '$value is a string';
//         break;
// }

// //echo's '$value is a string'

// switch(gettype($value)) {
//     case 'string':
//         echo '$value is a string';
//         break;
//     default:
//         echo '$value is not a string';
//         break;
// }

// // echo's '$value is not a string'



 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $day_of_week = date('N');

 switch($day_of_week) {
     case 1:{
         echo 'Monday' . PHP_EOL;
         break;
     }

     case 2:{
         echo 'Tuesday' . PHP_EOL;
         break;
     }
     
     case 3:{
         echo 'Wednesday' . PHP_EOL;
         break;
     }
     case 4:{
         echo 'Thursdsay' . PHP_EOL;
         break;
     }
     case 5:{
         echo 'Friday' . PHP_EOL;
         break;
     }
     case 6:{
         echo 'Saturday' . PHP_EOL;
         break;
     }
     case 7:{
         echo 'Sunday' . PHP_EOL;
         break;
     }
 }

// Test and verify the results before proceeding by 
// creating a matching if block. The output should be identical.

?>