<?php
session_start();
include("connect.php");
$task_id=$_GET['taskid'];
$deletetask="DELETE FROM tasks where id = $task_id";
if(mysqli_query($conn,$deletetask))
{
    $_SESSION['success']="task deleted successfully";
    header("location: ../show-tasks.php");
}
?>