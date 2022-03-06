<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<center>
		<fieldset>
			<legend>Log In</legend>
			<form action="loginprocess.php" method="post"><br><br>
				Username:<input type="text" name="uname" required=""><br><br>
				Password:<input type="text" name="upassword" required=""><br><br>
				<input type="submit" name="sub" value="Login">
				<br>
				<?php if (isset($_REQUEST['err'])) {
					$msg = "Invalid Username or Password";
				}
				?>
				<p style="color:red;">
					<?php if (isset($msg)) {
						echo $msg;
					}
					?>
					
				</p>
			</form>
		</fieldset>
	</center>
</body>
</html>