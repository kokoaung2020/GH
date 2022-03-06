<?php 

session_start();
include("config.php");

if (isset($_REQUEST['sub'])) {
	
	$a = $_REQUEST['uname'];
	$b = $_REQUEST['upassword'];

	$res = mysqli_query($conn,"SELECT * FROM users WHERE uname='$a' AND upassword='$b'");
	$result = mysqli_fetch_array($res);
	if ($result) {
		
		$_SESSION["login"] = "1";
		header("Location:index.php");
	}else{

		header("Location:login.php?err=1");
	}
}

?>