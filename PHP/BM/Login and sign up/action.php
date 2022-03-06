<?php 
include("config.php");
if (isset($_POST['submit'])) {

	$name = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];

	$mysql = mysqli_multi_query($conn,"insert into login(name,email,password,phone,gender) values('$name','$email','$password','$phone','$gender')");
	if ($mysql) {
		echo "Sign Up Successful";
	}else{
		echo "Failed";
	}
}

if (isset($_POST['log'])) {
	$name = $_POST['username'];
	$password = $_POST['password'];

	$result = mysqli_query($conn,"select* from login where name='$name' and password='$password'");
	$res = mysqli_fetch_array($result);
	if ($res) {
		echo "Hello You Success";
	}else
	header("location:index.php");
}

?>