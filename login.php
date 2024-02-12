<?php include 'layout/header.php'; 
include 'dbconnect/config.php';
$emailerr=$passerr=$failler='';//ye hmara validation ke liye variable bnaya gya hai.
if($_SERVER['REQUEST_METHOD']=='POST'){//yha method check krte hai
//print_r($_POST); check krte hai es function se ki data aa rha hai ya nhi
    if(isset($_POST['login'])){//ye button pr condition diye hai
        if(empty($_POST['email'])||$_POST['email']==''){
            $emailerr="*Please enter your email";
        }
        elseif(empty($_POST['pass'])||$_POST['pass']==''){
            $passerr="*Please enter your password";
        }
        else{
            $email = $_POST['email'];
            $password = $_POST['pass']; 
            $query = "SELECT * FROM users where email='$email' && password='$password'";//yha pahla email aur poassword database column name hai aur dusra variable hai.
            $result=mysqli_query($con,$query);
            // print_r($result);ye function se hm check krte hai ki row match kiya kiya ya nhi
            if(mysqli_num_rows($result)==1)//number of row count krne ke liye function
            {
                $data = mysqli_fetch_assoc($result);//db se data ko fetch krne ke liye.
                session_start();
                $_SESSION['name'] = $data['firstname'].' '.$data['lastname'];
                $_SESSION['email'] = $data['email'];
                $_SESSION['phone'] = $data['phone'];//ye column name hai aur $session  vala variable hai apne se bnaya gya hai
                $_SESSION['roll'] = $data['roll'];
                $_SESSION['id'] = $data['Id'];
                if($data['roll']=='admin'){
                    header('Location:admin/dashboard.php');
                }
                else{
                    header('Location:dashboard.php');
                }
            }
            else{
                $failler = "* Your email and password is not match";
            }
        }
    }
}
 ?>

<!-- breadcrumbs Section start -->
<section class="breadcrumbs">
    <div class="container">
        <div class="row">
            <h1>Login Form</h1>
        </div>
    </div>
</section>
<!-- breadcrumbs Section End -->
<!-- login form start -->
<section class="login-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
            <form class="row g-3 mt-4" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="Post">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <p style="color:red;"><?= $failler ?></p>
                        <label for="inputPassword2">Email</label>
                        <input type="text" class="form-control new-field" id="inputPassword2" name="email">
                        <small style="color:red;">
                            <?php echo $emailerr;  ?>
                        </small>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="pass">Password</label>
                        <input type="text" class="form-control new-field" id="last_name" name="pass">
                        <small style="color:red;">
                            <?php echo $passerr;  ?>
                        </small>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <input class="btn btn-dark mt-4 mb-5 px-5 fw-bold py-3 rounded-pill" type="submit"
                            value="Login" name="login">
                    </div>
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>
<!-- login form end -->
<?php include 'layout/footer.php' ?>