<?php 

class One{

	public function ClassName() {

		return __CLASS__;
	}

	public function getClassName() {

		echo static::ClassName();			//self:: nae ma ya earlybinding 
											//static:: nae thone pay latebinding
	}
}

class Two extends One{

	public function ClassName() {

		return __CLASS__;
	}
}

$obj = new One();
$obj->getClassName();
echo "<hr>";

$aa = new Two();
$aa->getClassName();

?>