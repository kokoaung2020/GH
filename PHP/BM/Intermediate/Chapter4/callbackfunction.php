<?php 

class Indes{

	public function doIt($var) {

		$i = 0;
		$sum = 0;
		while ($i < 1000) {
			
			$sum += $i;
			$i++;

		}
		$this->$var($sum);
	}

	public function finish($total) {

		echo "All total is ".$total;
	}

	public function donkey() {

		echo "I am donkey";
	}
}

$obj = new Indes();
$obj->doIt("finish");

?>