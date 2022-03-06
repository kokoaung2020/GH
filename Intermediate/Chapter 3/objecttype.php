<?php 

class Test{


}

class Index{

	public function showResult(Test $num) {

		var_dump($num);
	}
}

$n = new Test();
$obj = new Index();
$obj->showResult($n);

?>