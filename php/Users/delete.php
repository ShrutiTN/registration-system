<?php 

	include("../includes/dbconnect.php");

	$id = $_GET['id'];

	$sql = "delete from usertable where id=".$id;

	if(mysqli_query($conn,$sql))
	{
		header('Location:/registration-system/php/dashboard.php?msg=record deleted');
	}
	else
	{
		header('Location:/registration-system/php/dashboard.php?msg=failed to delete records');	
	}

 ?>
