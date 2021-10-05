<?php
session_start();
include("connect.php");
$user_id=$_GET['userid'];
$deleteuser="DELETE FROM users where id = $user_id ";
if(mysqli_query($conn,$deleteuser))
{
    $_SESSION['success']="user deleted successfully";
    header("location: ../show-users.php");
}
?>