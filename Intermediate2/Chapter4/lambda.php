<?php 

function doIt($para1,$para2,$para3) {

	$total = $para1+$para2;
	$para3($total);
}

doIt(3,5,function($num){

	echo "Number is ".$num;
});

?>