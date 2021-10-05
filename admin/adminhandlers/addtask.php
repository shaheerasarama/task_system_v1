<?php
session_start();
include("connect.php");

$title=$_POST['title'];
$body=$_POST['body'];
$userid=$_POST['user'];

$InsertIntoTasks= "INSERT INTO TASKS (title,body,user_id)
VALUES('$title','$body','$userid')";

 if(mysqli_query($conn,$InsertIntoTasks))
 {
     $_SESSION['success']='added new task successfully';
     header("location: ../add-task.php");
 }

?>