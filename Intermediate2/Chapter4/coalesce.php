<?php 

function doIt(...$var) {

	echo $var[3] ?? "No arguments";
}

doIt();

?>