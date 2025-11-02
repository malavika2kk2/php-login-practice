<?php

$sname="localhost";
$uname="root";
$pass="";
$db_name="login_db";
$conn=mysqli_connect($sname,$uname,$pass,$db_name);
if(!$conn)
{
    echo "connection failed";
}
else{
    echo "connection sucess";
}
?>
