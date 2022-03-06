<?php 

class One{

	public static $name = "Ko Ko Aung";
	public static function authorName() {

		return self::$name;
	}
	public static function getAuthorName() {

		echo static::authorName();				//dar ka main
	}
}

class Two extends One{

	public static function authorName() {

		return self::$name . " is luchaw";
	}
}

$obj = new One();
$obj->getAuthorName();
echo "<hr>";

$aa = new Two();
$aa->getAuthorName();

?>