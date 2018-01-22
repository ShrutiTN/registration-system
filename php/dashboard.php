<?php 

  if(isset($_GET['msg'])){

  	echo "<h6 style='color:red;'>".$_GET['msg']."</h6>";
  }

  include("includes/dbconnect.php");
  $status="";
  echo "Welcome To DashBoard<br/><br/><br/>";

$sql = "select * from usertable";
$result = mysqli_query($conn, $sql);
echo "<table>";
echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Gender</th><th>Email Id</th><th>Contact Number</th><th>Username</th><th>Password</th><th>Status</th><th>Edit</th><th>Delete</th></tr>";
while($row=mysqli_fetch_assoc($result))
{
if($row['stat']==0)
{
$status="Inactive";
}
else
{
$status="Active";
}
echo "<tr><td>".$row['id']."</td><td>".$row['first_name']."</td><td>".$row['last_name']."</td><td>".$row['gender']."</td><td>".$row['email']."</td><td>".$row['contactno']."</td><td>".$row['username']."</td><td>".$row['pass']."</td><td>".$status."</td><td><a href='users/edituser.php?id=".$row['id']."'>Edit</a></td><td><a href='users/delete.php?id=".$row['id']."'>Delete</a></td></tr>";
}

echo "</table>";

?>

