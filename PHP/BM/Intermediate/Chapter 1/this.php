<?php 

class This{

	public $name = "Tun Tun";
	public function call() {

		echo $this->name = "Hla Hla";
	}
}

$obj = new This();
$obj->call();

echo "<br>";

$bb = new This();
echo $bb->name;

?>