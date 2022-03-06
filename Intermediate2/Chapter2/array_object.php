<?php 

$ary = ["one"=>1,"Two"=>2,"Three"=>3];

var_dump($ary);
echo "<br>";
echo $ary["Two"];
echo "<hr>";

$obj = (object) $ary;
var_dump($obj);
echo "<br>";
echo $obj->one;

?>