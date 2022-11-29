<?php 

/*
4 types:

for
while
do..while
foreach

*/

/*for loop
for($i = 0; $i<=10; $i++) {

	echo $i;
	echo '<br>';
} */


/*while loop
$i=0;
while($i<=5 ) {
	echo $i;
	echo '<br>';

	$i++;

} */

/*do while - not commonly used in programming applications
$i=0;

do {

	echo $i;
	echo '</br>';
	$i++;
}

while($i<=15);
*/

//foreach - mostly used in arrays
$people = array('Joe', 'Jemar', 'Heber');

//$person as singular of people, ex. $cars -> $car
/*Index array
foreach($people as $person) {

	echo $person;
	echo '<br>';

}
*/

// Associative Array
$people = array(

	'Joe' => 'joe.balingit@gmail.com',
	'Heberjune' => 'heberjune@gmail.com'

);

//$person as key, and $emailAddress as value
foreach($people as $person => $emailAddress) {

	echo $person . ': ' . $emailAddress;
	echo '<br>';
}

?>
