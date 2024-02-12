<?php 
session_start();
if(!isset($_SESSION['id'])){
    header('Location:login.php');
}
//print_r($_SESSION);//check krne ke liye ki session start huaa hai ya nhi
?>
<a href="logout.php">logout</a>