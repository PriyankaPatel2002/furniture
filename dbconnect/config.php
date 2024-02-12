<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$database = 'furni';
$con = mysqli_connect($host,$user,$pass,$database);
if(!$con)
{
   die("connection not established".mysqli_connect_error($con));
}
?>