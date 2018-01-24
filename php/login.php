<?php
include("includes/header.php");
include("includes/dbconnect.php");


$user=$pass="";
$user_err=$pass_err="";

if($_SERVER['REQUEST_METHOD']=="POST")
{
	if(empty($_POST['user']))
	{
		$user_err = "Username required";
	}else{
		$user = test_input($_POST['user']);
	}

	if(empty($_POST['pass']))
	{
		$pass_err = "Password required";
	}else{
		$pass = test_input($_POST['pass']);
	}


if(!empty($user) && !empty($pass))
{
	$sql = "select username, pass from usertable where username='".$user."' ,pass='".$pass."'";
	$result = mysqli_query($conn,$sql);
	while($row=mysqli_fetch_assoc($result))
	{
	if($row['username']==$user && $row['pass']==$pass)
	{
	header('Location:dashboard.php');
	}
	else
	{
	echo "Invalid user";
	}
	}
}


}

function test_input($data)
{
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" novalidate="true">
<div class="block">
<div class="centered">
<table class="logintable">
<tr><td><h1>Login Form</h1></td></tr>	
<tr><td><input type="text" name="user" id="user" class="txt" placeholder=" Username"></td><span class="error" style="color: white;"><?php echo $user_err; ?></span></tr><br/></tr>
<tr><td><input type="Password" name="pass" id="pass" class="txt" placeholder=" Password"></td><span class="error" style="color: white;"><?php echo $pass_err; ?></span></tr>
<tr><td><input type="submit" name="sub" id="sub" value="Sign In" class="btn">  <input type="reset" name="reset" class="btn" value="Reset"></td></tr>
</table>
</div>
</div>
</form>
<?php
include("includes/footer.php");

?>