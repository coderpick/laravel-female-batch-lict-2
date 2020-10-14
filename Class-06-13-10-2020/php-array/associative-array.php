<?php
 $person =  array(
	 'Tony' => 25,
	 'Bony' => 32,
	 'mony' => 19, 
	);

//print_r($person);


 foreach ($person as $name => $age) {
 	 echo "Person Name is ".$name. " and age is ".$age."<br/>";
 }


?>