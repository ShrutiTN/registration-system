<?php
include("includes/header.php");
include("includes/dbconnect.php");

if(isset($_POST["sub"]))
{
$user = $_POST["user"];
$pass =$_POST["pass"];

$sql = "select username, pass from usertable";
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
?>


<form method="post" action="login.php">
<table>
<tr><td>Username</td><td><input type="text" name="user" id="user"></td></tr>
<tr><td>Password</td><td><input type="text" name="pass" id="pass"></td></tr>
<tr><td><input type="submit" name="sub" id="sub" value="Sign In" class="btn">  <input type="reset" name="reset" class="btn" value="Reset"></td></tr>
</table>
</form>
<?php
include("includes/footer.php");

?>