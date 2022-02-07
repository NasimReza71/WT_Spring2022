<!DOCTYPE html>
<html>
<head><title>Registration Form</title>
</head>
<body>
    <h3>Registration Form</h3><br><hr>
<form action="Control/result.php" method="post">

<table>
<tr><td>First Name:</td><td><input type="text" name="name"></td></tr>
<tr><td>Last Name:</td><td><input type="text" name="last_name"></td></tr>
<tr><td>Age:</td><td><input type="number" name="number"></td></tr></table>
<br>
<td>
Designation:</td>
<input type="radio" name="Desig">Junior Programmer
<input type="radio" name="Desig">Senior Programmer
<input type="radio" name="Desig">Project Lead 
<br>
Preferred language:
 <input type="radio"  name="language" value="JAVA">JAVA
<input type="radio"  name="language" value="PHP">PHP
<input type="radio"  name="language" value="C++">C++
<br>
<table>
<tr><td>Email:</td><td><input type="text" name="name"></td></tr>
<tr><td>Password:</td><td><input type="password" name="password"></td></tr>
</table>
<br>
Select Any Box:
<input type="checkbox" name="c1" value="check1"> Box1
<input type="checkbox" name="c2" value="check1"> Box2
<br>
Please choose a file

<input type="file" id="myFile" name="filename">
  
<br>
<input type="submit" name="submit" value="Submit">
<input type="submit" name="reset" value="Reset">













<form>
</body>
</html>