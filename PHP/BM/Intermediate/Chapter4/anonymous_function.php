<?php 

$num = 20;
$harhar = function(&$num) {

    $num = 50;
    echo $num;
};

echo $num . "<hr>";
$harhar($num);
echo "<hr>".$num;

?>