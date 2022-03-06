<?php 

class Index{

	public $name = "Mg Mg";
	public function __toString() {

		return "This class have no properties or methods<hr>";
	}

	public function __invoke() {

		echo "You are trying to call objects as Method<hr>";
	}

	public function __clone() {
		echo "You are cloning me<hr>";
	}
}

$obj = new Index();
echo $obj;
echo $obj();

$aa = clone $obj;
echo $aa->name;
?>