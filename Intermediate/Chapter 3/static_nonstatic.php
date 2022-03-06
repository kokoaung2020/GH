<?php 

class Index{

	public static $count = 0;
	public function showMe() {

		echo self::doIt();
	}

	public static function doIt() {

		echo "Hello World";
	}
}

$obj = new Index();
$obj->showMe();

?>