<?php 

class Destructor{

	var $t = 0;
	public function __construct() {

		echo "This is constructor. <br>";
	}

	public function doIt() {

		for ($i=0; $i < 10000; $i++) { 
			
			$this->$t +=$i;
		}

		echo "Value is ".$this->$t."<br>";
	}

	public function __destruct() {

		echo "Well Done";
	}
}

$obj = new Destructor();
$obj->doIt();

?>