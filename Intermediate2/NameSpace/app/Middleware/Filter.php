<?php 
namespace app\Middleware;
class Filter{

	public function sayFilterName() {

		echo "My name is filter<hr>";
		$dtime = new \DateTime();
	}
}

?>