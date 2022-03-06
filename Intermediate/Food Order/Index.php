<?php 
require_once "vendor/autoload.php";
use app\database\DBGen;
class Index{

	private $db;
	public function __construct() {

		$this->db = new DBGen();
	}
}

new Index();

?>