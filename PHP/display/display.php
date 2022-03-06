<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Insert Data and Display in Table </title>

	<style> 
input[type=text] {
  width: 100%;
  padding: 7px ;
  margin: 5px 0;
  border: 1px solid #000000;
  }
input[type=submit] {
  width: 50%;
  padding: 9px;
  margin: 5px 0;
  
  border: 2px solid #000000;
  outline: none;
   background-color:green;
   color:white;
    
}
	</style>

</head>
<body>


 <form action="action.php" method="post" name="form1">
<table width="25%" border="0">
 <tbody><tr> 
<td>Product Name</td>
<td><input type="text" name="pname"></td>
</tr>
<tr> 
<td>Product Code</td>
<td><input type="text" name="pcode"></td>
</tr>
<tr> 
<td>Product Price </td>
<td><input type="text" name="pprice"></td>
</tr>
<tr> 
<td></td>
<td><input type="submit" name="Submit" value="Add"></td>
</tr>
			
        </tbody></table>
    </form>



</body>
</html>