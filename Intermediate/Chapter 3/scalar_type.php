<?php 

class Index{

	public function showResult(bool $num) {

		var_dump($num);
	}
}

$ind = new Index();
$ind->showResult("ahdfjf");

?>