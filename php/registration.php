<?php 
include("includes/dbconnect.php");

if(isset($_POST["submit"]))
{
	$fname = $_POST["fn"];
	$lname = $_POST["ln"];
	$username = $_POST["un"];
	$password = $_POST["pass"];
	$email = $_POST["email"];
	$contact = $_POST["contactno"];
	$gender = $_POST["gender"];
	$dob = $_POST["dob"];
    	
	
	$sql = "insert into usertable(first_name,last_name,gender,email,contactno,username,pass,stat) values('$fname','$lname','$gender','$email','$contact','$username','$password',1)";
    //echo $sql;   
   if(mysqli_query($conn,$sql))
	{
		echo "Record inserted successfully";
		header('Location:dashboard.php');
		
	}else{
		echo "error in query".mysqli_error($conn);
	}
	
	}

?>


<html>
<head>
<title>registration form</title>
</head>

<body>
<form method="post" action="registration.php">
<table>
<tr><td>First Name</td><td><input type="text" name="fn" id="fn"></td></tr>
<tr><td>Last Name</td><td><input type="text" name="ln" id="ln"></td></tr>
<tr><td>User Name</td><td><input type="text" name="un" id="un"></td></tr>
<tr><td>Password</td><td><input type="password" name="pass" id="pass"></td></tr>
<tr><td>Email id</td><td><input type="email" name="email" id="email"></td></tr>
<tr><td>Contact number</td><td><input type="text" name="contactno" id="contactno"></td></tr>
<tr><td>Gender</td><td><input type="radio" name="gender" id="male" value="male"> Male <input type="radio" name="gender" id="female" value="female"> Female</td></tr>
<tr><td>Date of birth</td><td><input type="date" name="dob" id="dob"></td></tr>
<tr><td><input type="submit" name="submit" id="submit" value="Register"><input type="reset" name="reset" id="reset" value="Reset"></td></tr>
</table>
</form>
</body>
</html>