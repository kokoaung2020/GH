<?php 

class Call{

	private $name = "Aye Aye";
	public function setter($data) {

		$this->name=$data;
	}

	public function getter() {

		return $this->name;
	}
}

$obj = new Call();
$obj->setter("Mya Mya");
echo $obj->getter();

?>