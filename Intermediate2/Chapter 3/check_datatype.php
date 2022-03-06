<?php 

class Index{

	public function check($num) {

		if (is_bool($num)) {
			
			echo "Good Job";
		}
		else{
			
			die("Must be bool data type");
		}
	}
}

$obj = new Index();
$obj->check(TRUE);

?>