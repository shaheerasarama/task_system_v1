<?php
include("connect.php");
$uid=$_GET['userid'];
$approveduser="UPDATE users set status=1 where id=$uid";
if(mysqli_query($conn,$approveduser))
{
    $_SESSION['success']="user approved successfully";
    header("location: ../show-users.php");
}
?>