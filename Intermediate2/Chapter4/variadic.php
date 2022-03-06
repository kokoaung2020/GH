<?php 

function doIt(...$var) {

	echo $var[2][3];
}

doIt("One","What's up",[1,2,3,4,5,6]);

?>