<?php 

include("config.php");

if (isset($_POST['submit'])) {
	$uname = $_POST['name'];
	$upass = $_POST['password'];

	$res = mysqli_query($conn,"SELECT * FROM user WHERE username='$uname' AND  password='$upass'");
	$result = mysqli_fetch_array($res);

	if ($result) {
		header('Location:account.php');
	}
	else{
		header('Location:login.php?incorrect=1');
	}
}

if (isset($_POST['signup'])) {
	$uname = $_POST['name'];
	$uemail = $_POST['email'];
	$upass = $_POST['password'];
	$ugender = $_POST['gender'];
	$udob = $_POST['dob'];

	$res = mysqli_multi_query($conn,"INSERT INTO user(username,email,password,gender,dob) VALUES('$uname','$uemail','$upass','$ugender','$udob')");
	if ($res) {
		header('Location:account.php');
	}
	else{
		header('Location:signup.php');
	}
}