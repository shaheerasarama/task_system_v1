<?php
define("SERVERNAME",'localhost');
define("USER",'root');
define("PASS",'');
define("DBNAME",'tasksystem');

$conn=mysqli_connect(SERVERNAME,USER,PASS,DBNAME);
if($conn)
{
    //echo "done";
}
else
{
    echo "error";
}
?>