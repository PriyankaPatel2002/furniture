<?php
include '../dbconnect/config.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM users where Id=$id";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<script>
            alert('Your data is deleted');
            window.location.href='userlist.php';
        </script>";
    }
    // else{
    //     echo 'error'.mysqli_error($con);
    // }error show krane ke liye
}else{
    header('Location:userlist.php');
}