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
<form>
<div class="block">
<div class="centered">
<table class="logintable">
<tr><td><h1>Login Form</h1></td></tr>	
<tr><td><input type="text" name="user" id="user" class="txt" placeholder=" Username"></td></tr>
<tr><td><input type="Password" name="pass" id="pass" class="txt" placeholder=" Password"></td></tr>
<tr><td><input type="submit" name="sub" id="sub" value="Sign In" class="btn">  <input type="reset" name="reset" class="btn" value="Reset"></td></tr>
</table>
</div>
</div>
</form>
<?php
include("includes/footer.php");

?>