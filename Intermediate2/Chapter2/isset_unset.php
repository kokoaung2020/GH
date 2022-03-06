<?php 

class Index{

	public function __isset($name) {

		echo "You are trying to check the set or not of <span style='color:red'>".$name."</span> property <hr>";
	}

	public function __unset($name) {

		echo "You are trying to check the set or not of <span style='color:red'>".$name."</span> property <hr>";
	}
}

$obj = new Index();
isset($obj->name);
unset($obj->name);

?>