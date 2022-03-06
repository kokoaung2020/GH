<?php 

class Member{

	public $name = "Tun Tun";
	public $age = "20";

	public function call() {

		echo "This is Method";
	}
}

class GoldMember extends Member{

	public $mine = "This is mine<br>";

}

class diamondMember extends Member{


}

$obj = new GoldMember();
echo $obj->mine;
echo $obj->name;

$bb = new diamondMember();
echo $bb->age;

?>