<?php
include("../includes/dbconnect.php");
   
    $id= $_POST['id'];
    $first_name = $_POST['fn'];
    $last_name = $_POST['ln'];
    $username = $_POST['un'];
    $pass = $_POST['pass'];
    $email = $_POST['email'];
    $contactno = $_POST['contactno'];
    $gender = $_POST['gender'];

    //echo $id;

    $sql = "update usertable set first_name='".$first_name."',last_name='".$last_name."',username='".$username."',pass='".$pass."',email='".$email."',contactno='".$contactno."',gender='".$gender."' where id=".$id;

   // echo $sql;
    if(mysqli_query($conn,$sql))
    {
    	echo "recode updated";

        header('Location:/registration-system/php/dashboard.php?msg=updated successfully');
    }
    else
    {
    	echo "failed".mysqli_error($conn);
        header('Location:edit.php?id='.$id.'&msg=Fail To update');
    }


?>