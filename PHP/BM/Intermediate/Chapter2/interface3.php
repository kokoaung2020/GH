<?php 

interface SheInter{

	public function ShegotoSchool($data);
}

interface HeInter{

	public function HegotoSchool($data);
}

class Index implements SheInter,HeInter{

	private $data;
	public function ShegotoSchool($data) {

		$this->data = $data;
	}

	public function HegotoSchool($data) {

		$this->data = $data;
	}

	public function outPut() {

		echo "<pre>".print_r($this->data,true)."</pre>";
	}

	public function busy() {

		echo "This user is busy with ".$this->data[count($this->data)-1];
	}
}

$sheary = ["Bag","Pencil","Book","Cosmatic"];
$heary = ["Bag","Pencil","Book","Rubber Ban"];

$obj = new Index();
$obj->ShegotoSchool($sheary);
$obj->outPut();
$obj->busy();
echo "<hr>";

$bb = new Index();
$bb->HegotoSchool($heary);
$bb->outPut();
$bb->busy();

?>