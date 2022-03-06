<?php 

class Index{

	private static $count = 0;
	public function doIt() {

		self::$count++;
		echo self::$count . "<br>";
	}
}

$obj = new Index();
$obj->doIt();
$obj->doIt();

$aa = new Index();
$obj->doIt();
$obj->doIt();

?>