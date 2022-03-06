<?php 

class Name{

	public function __get($var) {

		echo "You are trying to get none exist property {$var} <hr>";
	}

	public function __set($name,$value) {

		echo "You are trying to set none exist property {$name} with value {$value}";
	}
}

$obj = new Name();
$obj->age;
$obj->name = "Mg Mg";

?>