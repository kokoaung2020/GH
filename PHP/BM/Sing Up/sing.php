<html>
<body>

  <style> 
input[type=text] {
  width: 25%;
  padding: 9px ;
  margin: 5px 0;
  border: 1px solid #000000;
  outline: none;
  
}

input[type=text]:focus {
  background-color: lightblue;
}
input[type=date] {
  width: 25%;
  padding: 7px ;
  margin: 5px 0;
  border: 1px solid #000000;
  outline: none;
  
}
input[type=date]:focus {
  background-color: lightblue;
  }
  input[type=email] {
  width: 25%;
  padding: 9px ;
  margin: 5px 0;
  border: 1px solid #000000;
  outline: none;
  
}
input[type=email]:focus {
  background-color: lightblue;
  }
  
  input[type=Number] {
  width: 25%;
  padding: 9px ;
  margin: 5px 0;
  border: 1px solid #000000;
  outline: none;
  
}
input[type=Number]:focus {
  background-color: lightblue;
  
 }
 input[type=password] {
  width: 25%;
  padding: 9px ;
  margin: 5px 0;
  border: 1px solid #000000;
  outline: none;
  
}
input[type=password]:focus {
  background-color: lightblue;
  
  }
  

input[type=submit] {
  width: 10%;
  padding: 10px;
  margin: 5px 0;
  box-sizing: border-box;
  border: 2px solid #000000;
  outline: none;
   background-color: blue;
   color:white;
    
}
input[type=submit]:focus {
    background-color: green;
}

 input[type=radio] {
  width: 5%;

  margin: 5px 0;

 
}

</style>

  
<center>
<form action="action.php" method="post">
<fieldset>
<legend> Sign Up</legend>
Name:-
<input type="text" name="name"><br><br>
Gender :-
<input type="radio" name="ab" value="Male">Male 
<input type="radio" name="ab" value="female">Female <br><br>
DOB:-
<input type="date" name="dob"><br><br>
Email :-
<input type="email" name="email"><br><br>
Mobile:-
<input type="Number" name="number"><br><br>
Password
<input type="password" name="password"><br><br>
<input type="submit" value="Sign Up" name="submit"><br><br>
</fieldset >
</form>
</center>
</body>
</html>