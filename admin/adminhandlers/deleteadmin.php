<?php
session_start();
include("connect.php");
$admin_id=$_GET['adminid'];
$deleteadmin="DELETE FROM admins where id = $admin_id ";
if(mysqli_query($conn,$deleteadmin))
{
    $_SESSION['success']="admin deleted successfully";
    header("location: ../show-admins.php");
}
?>