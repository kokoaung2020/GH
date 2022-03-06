<?php
include_once("config.php");
$result = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC"); 
?>

	>?php 
while($res = mysqli_fetch_array($result)) { 		
echo "";
echo "";
echo "";
echo "";	
echo "";        
}
?>
<table width="50%" height="15%" border="0">
<tbody><tr bgcolor="yellow">
<td>Name</td>
<td>Age</td>
<td>Email</td>
<td>Update</td>
<td>Remove</td>
</tr><tr><td bgcolor="">".$res['name']."</td><td>".$res['age']."</td><td>".$res['email']."</td><td bgcolor="green"><a href="edit.php?id=$res[id]"><font color="white">Edit</a>"; 
echo"</font></td><td bgcolor="red"> <a href="delete.php?id=$res[id]" onClick="return confirm('Are you sure you want to delete?')"><font color="white">Delete</font></a></td></tr></tbody></table>