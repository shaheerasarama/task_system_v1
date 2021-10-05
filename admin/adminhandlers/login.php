<?php
session_start();
include("connect.php");
$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM admins where email='$email' ";
$query=mysqli_query($conn,$sql);
$emailcount=mysqli_num_rows($query);
$admindata=mysqli_fetch_array($query);
if($emailcount > 0)
{
    if(password_verify($password,$admindata['password']))
    {
        $_SESSION['id']=$admindata['id'];
        header("location: ../show-users.php");
       
    }
    else
    {
        $_SESSION['error']="invalid password";
        header("location: ../login.php");


    }
}
else
{
    $_SESSION['error']="invalid email";
        header("location: ../login.php");

}

?>