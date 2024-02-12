<?php include 'layout/header.php'; 
include 'dbconnect/config.php';
$fnameerr=$lnameerr=$emailerr=$passerr=$phoneerr=$cpasserr='';//ye hmara validation ke liye variable bnaya gya hai.
if($_SERVER['REQUEST_METHOD']=='POST'){//yha method check krte hai
//print_r($_POST); check krte hai es function se ki data aa rha hai ya nhi
    if(isset($_POST['signup'])){//ye button pr condition diye hai
        if(empty($_POST['first_name'])||$_POST['first_name']==''){//ye hmara validation ka error  show krayega
            $fnameerr="*Please Enter Your First Name";
        }
        elseif(empty($_POST['email'])||$_POST['email']==''){
            $emailerr="*Please enter your email";
        }
        elseif(empty($_POST['phone'])||$_POST['phone']==''){
            $phoneerr="*Please enter your Phone number";
        }
        elseif(empty($_POST['pass'])||$_POST['pass']==''){
            $passerr="*Please enter your password";
        }
        elseif((empty($_POST['c_pass'])||$_POST['c_pass']=='')){
            $cpasserr="*Please enter your confirm password";
        }
        elseif($_POST['c_pass']!=$_POST['pass'])
        {
            $cpasserr="*Password is not match";
        }
        else{
            $firstname = $_POST['first_name'];
            $lastname = $_POST['last_name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $password = $_POST['pass'];
            $query = "INSERT INTO users (firstname,lastname,email,phone,password,roll) values('$firstname','$lastname','$email','$phone','$password','user')";
            $result = mysqli_query($con,$query);
            if($result){
                echo "<script>
                    alert('Your account Created successfully');
                    window.location.href='login.php';
                </script>";
            }else{
                echo "Something went wrong";
            }
        }
    }
}
 ?>
<!-----------breadcrums section start-------------------->
<section class="breadcrum">
    <div class="container">
        <div class="row">
            <h1 class="text-white">Sign-up</h1>
        </div>
    </div>
</section>
<!-----------breadcrums section end-------------------->
<section class="sign-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <form class="row g-3 mt-4" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="Post">
                    <div class="col-lg- col-md-6 col-sm-12">
                        <label for="first_name">First name</label>
                        <input type="text" class="form-control new-field" id="first_name" name="first_name">
                        <small style="color:red;">
                            <?php echo $fnameerr;  ?>
                        </small>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="last_name">Last name</label>
                        <input type="text" class="form-control new-field" id="last_name" name="last_name">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputPassword2">Email</label>
                        <input type="text" class="form-control new-field" id="inputPassword2" name="email">
                        <small style="color:red;">
                            <?php echo $emailerr;  ?>
                        </small>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="inputPassword2">Phone</label>
                        <input type="text" class="form-control new-field" id="inputPassword2" name="phone">
                        <small style="color:red;">
                            <?php echo $phoneerr;  ?>
                        </small>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="pass">Password</label>
                        <input type="text" class="form-control new-field" id="last_name" name="pass">
                        <small style="color:red;">
                            <?php echo $passerr;  ?>
                        </small>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <label for="c_pass">Confirm Password</label>
                        <input type="text" class="form-control new-field" id="last_name" name="c_pass">
                        <small style="color:red;">
                            <?php echo $cpasserr;  ?>
                        </small>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <input class="btn btn-dark mt-4 mb-5 px-5 fw-bold py-3 rounded-pill" type="submit"
                            value="Sign Up" name="signup">
                    </div>
                </form>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>
<?php include 'layout/footer.php';?>