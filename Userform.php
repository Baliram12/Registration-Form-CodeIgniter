<!DOCTYPE html>
<html>
<head>
	<title>First Form</title>
</head>
<body>
	<h2>Registration Form</h2>
	<form method="post" action="http://localhost/code/index.php/Usercon/demo">
	
	Name:<input type="text" name="name"><br><br>
	Email:<input type="text" name="email"><br><br>
	Password:<input type="password" name="password"><br><br>
	Gender:<input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>
	Qualification:<input type="checkbox" name="qualification" value="10th"checked>10th<br>
  <input type="checkbox"  name="qualification"value="12th"checked> 12th<br>
 <input type="checkbox"  name="qualification" value="Degree"checked> Degree<br><br>
	Image:<input type="file" name="image" value="image"><br><br>
    <input type="Submit" name="submit" value="submit">
    </form>

</body>
</html>