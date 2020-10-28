<?php 

	class DB
	{
		public function __call($method, $args)
		{
			echo 'You call the method: '.$method."<br/>";
			print_r($args);
		}

	}

	$db = new DB;

	echo $db->whereUsername('alien','hafizur');

 ?>