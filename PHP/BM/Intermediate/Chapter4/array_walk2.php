<?php 

$number = 20;
$ary = ["1" => "One","2"=>"Two","3"=>"Three"];

array_walk($ary,function($value,$key) use (&$number) {

	$number = ++$number;
	echo "Key is ".$key." Values is ".$valuse." Current Value is ".$number."<hr>";
});