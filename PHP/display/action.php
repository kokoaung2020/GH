<?php 
//including the database connection file
include("config.php");
if(isset($_POST['Submit'])) {    
$pname = $_POST['pname'];
$pcode = $_POST['pcode'];
$pprice = $_POST['pprice'];
        
// checking empty fields
if(empty($pname) || empty($pcode) || empty($pprice)) {                
if(empty($pname)) {
echo "<font color='red'>Product Name field is empty.</font><br>";
}
if(empty($pcode)) {
echo "<font color='red'>Product Code field is empty.</font><br>";
}
if(empty($pprice)) {
echo "<font color='red'>Product Price  field is empty.</font><br>";
}
//link to the previous page
	echo '<br><a href="javascript:self.history.back();">Go Back</a>';
 } else { 
// if all the fields are filled (not empty)             
//insert data to database
$result = mysqli_query($conn, "INSERT INTO crud2(pname,pcode,pprice) VALUES('$pname','$pcode','$pprice')");
        
//display success message
header('Location:show.php');
        
}
}
?>