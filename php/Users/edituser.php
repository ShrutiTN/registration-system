<?php 
include("../includes/dbconnect.php");
 
  $id = $_GET['id'];

  $sql = "select * from usertable where id=".$id;
  $result = mysqli_query($conn,$sql);
  While($row=mysqli_fetch_assoc($result))
  {
  	$id = $row['id'];
  	$first_name = $row['first_name'];
  	$last_name = $row['last_name'];
  	$gender = $row['gender'];
  	$email = $row['email'];
  	$contactno = $row['contactno'];
  	$username = $row['username'];
  	$pass = $row['pass'];
  	$stat = $row['stat'];
  	
  
  }

 ?>



<html>
<head>
<title>Edituser page</title>
</head>

<body>
<form method="post" action="update.php">
<input type="hidden" name="id" value="<?php echo $id;?>">
<table>
<tr><td>First Name</td><td><input type="text" name="fn" id="fn" value="<?php echo $first_name; ?>"></td></tr> 
<tr><td>Last Name</td><td><input type="text" name="ln" id="ln" value="<?php echo $last_name; ?>"></td></tr>
<tr><td>User Name</td><td><input type="text" name="un" id="un" value="<?php echo $username; ?>"></td></tr>
<tr><td>Password</td><td><input type="password" name="pass" id="pass" value="<?php echo $pass; ?>"></td></tr>
<tr><td>Email id</td><td><input type="email" name="email" id="email" value="<?php echo $email; ?>"></td></tr>
<tr><td>Contact number</td><td><input type="text" name="contactno" id="contactno" value="<?php echo $contactno; ?>"></td></tr>
<tr><td>Gender</td><td><input type="radio" name="gender" id="male" value="male" checked="<?php echo ($gender == 'male')? true:false; ?>" > Male <input type="radio" name="gender" id="female" value="female" checked="<?php echo ($gender == 'female')? true:false; ?>"> Female</td></tr>

<tr><td><input type="submit" name="submit" id="submit" value="Update"><input type="reset" name="reset" id="reset" value="Reset"></td></tr>
</table>
</form>
</body>
</html>

