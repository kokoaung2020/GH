<?php 
require_once "vendor/autoload.php";
use app\Square;
use app\Circle;
use app\gem\Shape;

class Index{

	public function __construct() {

		$square = new Square(20,20);
		echo "Square Area is ". $square->getArea();
		echo "<hr>";

		$circle = new Circle(150);
		echo "Circle Area is ". $circle->getArea();
		echo "<hr>";

		$this->getPrice($circle);
		$this->getPrice($square);
	}

	public function getPrice(Shape $shape) {

		$area = $shape->getArea();
		echo "Your total price is ". ($area * 17) . " $<hr>";
	}

}

new Index();

?>