<?php 
error_reporting(E_ALL);										

class Hello{

	public function Gg(int $num) : string {

		return $num;
	}
}

$obj = new Hello();
$vv = $obj->Gg(10);
var_dump($vv);

?>