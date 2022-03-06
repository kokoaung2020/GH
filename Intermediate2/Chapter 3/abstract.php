<?php 

abstract class Hello{

	public $name = "hello";
}

abstract class Name extends Hello{

	public abstract function myName();

	public function doIt() {

		echo "I am doing it now!<hr>";
	}
}

class Index extends Name{

	public function myName() {

		echo "I am abstract method<hr>";
	}
}

$obj = new Index();
$obj->myName();
$obj->doIt();
echo $obj->name;

?>