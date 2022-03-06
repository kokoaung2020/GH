<?php
include("config.php");
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$gender = $_POST['ab'];
	$dob = $_POST['dob'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$password = $_POST['password'];
	$result = mysqli_multi_query($mysqli,"insert into users (name,gender,dob,email,mobile,password) values('$name','$gender','$dob','$email','$number','$password')");
	if($result)
	{
		echo "Registration Successfully";
	}
	else{
		echo "failed:";
	}
}
?>
