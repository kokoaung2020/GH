<?php 

$opp = create_function('$para1,$para2','echo "Para 1 is ".$para1[0]."<br>Para2 is ".$para2[1];');

$opp(["One","Two"],["One","Two"]);

?>