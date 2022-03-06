<?php 

class Constructor{

	function __construct($par1,$par2,$par3) {

		echo "Ths sum is ".($par1+$par2+$par3);
	}
}

new Constructor(22,11,44);

?>