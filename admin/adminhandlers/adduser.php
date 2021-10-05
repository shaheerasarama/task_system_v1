<?php
session_start();
include("connect.php");

$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$password=password_hash($password,PASSWORD_DEFAULT);

$adduser="INSERT INTO USERS (name,email,password)
VALUES('$name','$email','$password')";

if(mysqli_query($conn,$adduser))
{
    $_SESSION['success']='added new user successfully';
    header("location: ../add-user.php");
}
?>