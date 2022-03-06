<?php 

trait Member{

	public $name = "Win Win";
	public function doIt(){

		echo "This is doIt Method.<br>";
	}
}

trait Gem{

	public $age = 20;
	public function hackIt() {

		 echo "This is hackIt Method.<br>";
	} 
}

trait Hacker{

	public function hello(){

		echo "This is hello Method.<br>";
	}
}

trait Mama{

	use Member,Gem,Hacker;

}

class Call{

	use Mama;
}

$obj = new Call();
$obj->hackIt();
echo $obj->name;
echo "<br>";
$obj->hello();

?>