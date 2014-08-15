<?php
// Create a file named foreach_books.php in you exercises directory. 
// Commit each step and push to GitHub.
// // Construct a loop that iterates through each book and then each 
// book's keys and values. Have it output the book's title,
//  then list the key value pairs for the data about each book.
// Update your loop to only show books that were written after 1950.



$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);


foreach ($books as $title => $stats) {
	if ($stats['published'] > 1950) {
		# code...
	
		echo "-------------------------------------------\n";
		echo "The book title is {$title}\n";
		echo "-------------------------------------------\n";
		echo " published -- {$stats['published']} \n";
		echo " author -- {$stats['author']} \n";
		echo " pages -- {$stats['pages']} \n";

	}
	else {
		echo "-------------------------------------------\n";
		echo "{$title} -- N/A\n";  
		echo "-------------------------------------------\n";
	}
}




?>