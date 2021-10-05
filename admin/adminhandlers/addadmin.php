<?php
session_start();
include("connect.php");

echo $name=$_POST['name'];
echo $email=$_POST['email'];
echo $password=$_POST['password'];
echo $password=password_hash($password,PASSWORD_DEFAULT);
echo $type=$_POST['type'];

$addadmin="INSERT INTO admins (name,email,password,type)
VALUES('$name','$email','$password','$type')";



 if(mysqli_query($conn,$addadmin))
 {
     $_SESSION['success']='added new admin successfully';
     header("location: ../add-admin.php");
   
 }
?>