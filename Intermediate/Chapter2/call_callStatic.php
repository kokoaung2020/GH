<?php 

class Indes{
/*
	public function __call($method,$values) {

		echo "You are calling none exist method {$method} with parameter of <hr>";
		echo "<pre>".print_r($values)."</pre>";
	}
*/

	public function __callStatic($name,$argument) {

		echo "You are calling none exist method {$name} with parameter of <br>";
		echo "<pre>".print_r($argument,true)."</pre>";
	}
}

//$obj = new Indes();
//$obj->hey("Mg MG");

Indes::hoy("Hla Hla","Mya Mya");


?>