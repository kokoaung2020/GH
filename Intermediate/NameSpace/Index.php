<?php 
require_once "vendor/autoload.php";

use app\Home;
use app\Best;
use app\Middleware\Filter;
class Index{

	public function __construct() {

		$home = new Home();
		$home->sayHomeName();

		$best = new Best();
		$best->sayBestName();

		$filter = new Filter();
		$filter->sayFilterName();
	}
}

new Index();

?>