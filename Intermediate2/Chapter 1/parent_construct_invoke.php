<?php 

class Member{

	public function __construct() {

		echo "This is parent.<br>";
	}
}

class GoldMember extends Member{

	public function __construct() {

		parent::__construct();
		echo "This is child.";
	}
}

new GoldMember();

?>