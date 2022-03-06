<?php 

class Getter{

	private $name = "Kaung Kaung";
	public function get() {

		return $this->name;
	}
}

$obj = new Getter();
echo $obj->get();

?>