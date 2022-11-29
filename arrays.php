
<?php 

// Indexed Array
$people = array('Joe', 'Jemar', 'Heberjune');
//echo $people[0];

// Associative Array
$people = array(

	'Joe' => 38,
	'Heberjune' => 35,
	'Jemar' => 33

);

//echo $people['Joe'];
//var_dump($people);


// Multi-dimensional Array

$cars = array(
	//brand, in-stock, sold
	array('Toyota', 20, 10),
	array('Honda', 30, 15),
	array('BMW', 40, 30)

);

echo $cars[1][0]; //this will output Honda;



 ?>