<?php 
include '../dbconnect/config.php';
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = "DELETE FROM product WHERE pid=$id";
    $result = mysqli_query($con,$query);
    if($result)
    {
        echo "<script>
        alert('Your data is deleted');
        window.location.href='product.php';
        </script>";
    }
    else{
        echo "Something went wrong".mysqli_error($con);
    }
}
else{
    header('Location:product.php');
}
?>
