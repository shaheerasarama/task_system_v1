<?php
include("connect.php");
$tid=$_GET['taskid'];
$approvedtask="UPDATE tasks set status=1 where id=$tid";
if(mysqli_query($conn,$approvedtask))
{
    $_SESSION['success']="task approved successfully";
    header("location: ../show-tasks.php");
}
?>