<?php 
include("config.php");

if(isset($_POST['sub']))
{
$uname = $_POST['uname'];
$upassword = $_POST['upassword'];

$res = mysqli_query($conn,"select* from user where username='$uname'and password='$upassword'");
$result=mysqli_fetch_array($res);
if($result)
{
echo "You are login Successfully ";
header("location:my-account.php");   // create my-account.php page for redirection 
	
}
else
{
	echo "failed ";
}
}
?>
