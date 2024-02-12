<?php 
include 'layout/head.php';
include '../dbconnect/config.php';
if(isset($_POST['update'])){
    $id = $_POST['id'];
    $firstname = $_POST['first_name'];
    $last = $_POST['last_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $role = $_POST['role'];
    $password = $_POST['pass'];
   
    $query = "UPDATE users SET firstname='$firstname', lastname='$last' , email='$email' , phone='$phone',password='$password', roll='$role'  WHERE Id=$id";
    $result = mysqli_query($con,$query);
        if($result){
            echo "<script>
                alert('Your data updated successfully');
                window.location.href='userlist.php';
            </script>";
        }else{
            echo "Something went wrong".mysqli_error($con);
        }
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $select = "SELECT * from users WHERE Id=$id";
    $selectresult = mysqli_query($con,$select);
    if(mysqli_num_rows($selectresult) > 0 )
    {
        $row = mysqli_fetch_assoc($selectresult);
        // print_r($row);
   
?>


<section class="update-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <form class="row g-3 mt-4" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="Post">
                    <div class="col-lg- col-md-6 col-sm-12">
                        <label for="first_name">First name</label>
                        
                        <input type="text" value="<?= $row['firstname'];?>" class="form-control new-field" id="first_name" name="first_name">

                    </div>
                    <input type="hidden" value="<?= $row['Id'];?> " name="id"/>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="last_name">Last name</label>
                        <input type="text" value="<?= $row['lastname'];?>" class="form-control new-field" id="last_name" name="last_name">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputPassword2">Email</label>
                        <input type="text" value="<?= $row['email'];?>" class="form-control new-field" id="inputPassword2" name="email">

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputPassword2">Phone</label>
                        <input type="text" value="<?= $row['phone'];?>" class="form-control new-field" id="inputPassword2" name="phone">

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="pass">Password</label>
                        <input type="text" value="<?= $row['password']; ?>" class="form-control new-field" id="pass" name="pass">

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="role">Role</label>
                        <select name="role" id="role">
                            <option <?php echo $row['roll']=='user'? 'selected' : ''; ?> value="user">User</option>
                            <option <?php echo $row['roll']=='admin'? 'selected' : ''; ?> value="admin">Admin</option>
                        </select>
                        

                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <input class="btn btn-dark mt-4 mb-5 px-5 fw-bold py-3 rounded-pill" type="submit"
                            value="Update" name="update">
                    </div>
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>
<?php  
 }
    }
    // else{
    //     header("Location:userlist.php");
    // }
?>
<?php include 'layout/footer.php';?>