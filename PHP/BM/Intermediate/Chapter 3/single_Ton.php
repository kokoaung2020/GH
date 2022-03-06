<?php 

class Index{

	private static $name = "BTS";
	private static $instance;

	private function __construct() {

		self::$name = "BlackPink";
	}

	public static function getInstance() {

		if (self::$instance == null) {
			
			self::$instance = new Index();
		}

		return self::$instance;
	}

	public function getName() {

		return self::$name;
	}
}

$ind = Index::getInstance();
echo $ind->getName();

?>