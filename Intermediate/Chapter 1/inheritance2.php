<?php 

class Member{

	public $name = "Hla Hla";
	public function doIt() {

		echo "This is doIt Method.<br>";
	}

	public function count() {

		echo "This is Count Method.";
	}
}

class GoldMember extends Member{

	public function count() {

		$this->name = "Aye Aye";
		echo "This is also a Method.".$this->name;
	}
}

$obj = new GoldMember();
$obj->doIt();
$obj->count();

?>