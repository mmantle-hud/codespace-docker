<?php
echo "hello new world";

try{
       $conn = new PDO('mysql:host=localhost;dbname=bookstore', 'admin', '9Qw5bPy9xDly');
       $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception) 
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}

//select all the students
$query = "SELECT * FROM books";
$resultset = $conn->query($query);
$books = $resultset->fetchAll();
$conn=NULL;

foreach ($books as $book) {
	    echo "<p>";
	    echo "{$book['title']}";
	    echo "</p>";
	}