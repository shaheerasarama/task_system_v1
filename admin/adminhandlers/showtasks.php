<?php
$selectTasks="SELECT tasks.*,users.name FROM tasks JOIN users on tasks.user_id=users.id";
$queryGetTasks=mysqli_query($conn,$selectTasks);
?>