<?php 

$ary = ["1"=>"One","2"=>"Two","3"=>"Three"];

function doIt($key,$valuse) {

	echo "Key is ".$key." Values is ".$valuse."<hr>";
}

array_walk($ary, "doIt");

?>