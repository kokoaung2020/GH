<?php 

$servername = "localhost";
$serveruser = "root";
$serverpass = "";
$dbname = "kka";

$conn = mysqli_connect($servername,$serveruser,$serverpass,$dbname);

if (!$conn) {
	die("connection Failed".mysqli_connect_error());
}