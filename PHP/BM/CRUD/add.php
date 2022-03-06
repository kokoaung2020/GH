
<?php
include_once("config.php");
if(isset($_POST['Submit'])) {	
$name = $_POST['name'];
$age = $_POST['age'];
$email =$_POST['email'];

$result = mysqli_query($conn, "INSERT INTO users(name,age,email) VALUE
('$name','$age','$email')");
echo "Data added successfully.";
echo "<br><a href='index.php'>View Result";
}
?>

</font>