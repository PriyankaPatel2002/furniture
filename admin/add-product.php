<?php include 'layout/head.php';
include '../dbconnect/config.php';
$pnameerr=$caterr=$branderr=$priceerr=$imageerr='';//ye hmara validation ke liye variable bnaya gya hai.
if($_SERVER['REQUEST_METHOD']=='POST'){//yha method check krte hai
//print_r($_POST); check krte hai es function se ki data aa rha hai ya nhi
    if(isset($_POST['addproduct'])){//ye button pr condition diye hai
        if(empty($_POST['productname'])||$_POST['productname']==''){//ye hmara validation ka error  show krayega
            $pnameerr="*Please Enter Your Product Name";
        }
        elseif(empty($_POST['category'])||$_POST['category']==''){
            $caterr="*Please enter your category";
        }
        elseif(empty($_POST['brand'])||$_POST['brand']==''){
            $branderr="*Please enter your Brand name";
        }
        elseif(empty($_POST['price'])||$_POST['price']==''){
            $priceerr="*Please enter your price";
        }
        elseif((empty($_FILES['image']['name'])||$_FILES['image']['name']=='')){
            $imageerr="*Please enter your product image";
        }
        else{
            $imagename = $_FILES['image']['name'];
            $tmpname = $_FILES['image']['tmp_name'];
            move_uploaded_file($tmpname,'productimage/'.$imagename);
            $productname = $_POST['productname'];
            $category = $_POST['category'];
            $brand = $_POST['brand'];
            $price = $_POST['price'];
            $description = $_POST['description'];
            $query = "INSERT INTO product (productname,category,brand,price,image,description) values('$productname','$category','$brand','$price','$imagename','$description')";
            $result = mysqli_query($con,$query);
            if($result){
                echo "<script>
                    alert('Your Product Added successfully');
                    window.location.href='product.php';
                </script>";
            }else{
                echo "Something went wrong".mysqli_error($con);
            }
        }
    }
}
 ?>
<section class="add-product">
    <div class="container">
        <div class="row">
            <h2 class="text-center mb-5">ADD PRODUCT</h2>
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <form class="row g-3" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="productname">Product Name</label>
                        <input type="text" class="form-control new-field" id="productname" name="productname">
                        <small><?php echo $pnameerr;?></small>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="image">Product Image</label>
                        <input type="file" class="form-control new-field" id="image" name="image">
                        <small><?php echo $imageerr;?></small>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Category</label>
                        <select  id="" class="form-control" name="category">
                            <option value="">---SELECT------</option>
                            <option value="wooden">Wooden</option>
                            <option value="fiber">Fiber</option>
                            <option value="plastic">Plastic</option>
                        </select>
                        <small><?php echo $caterr;?></small>
                        <!-- <input type="text" class="form-control new-field" id="first_name" name="first_name"> -->
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label>Brand</label>
                        <select name="brand" id="" class="form-control">
                            <option>---SELECT------</option>
                            <option value="sleepwell">Sleepwell</option>
                            <option value="fiber">Fiber</option>
                            <option value="plastic">Plastic</option>
                        </select>
                        <small><?php echo $branderr;?></small>
                        <!-- <input type="text" class="form-control new-field" id="first_name" name="first_name"> -->
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="price">Total Price</label>
                        <input type="text" class="form-control new-field" id="price" name="price">
                        <small><?php echo $priceerr;?></small>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <label for="description">Description</label>
                        <textarea type="text" class="form-control new-field" name="description" id="description"></textarea>
                        
                    </div>
                    <div class="col-auto">
                        <input type="submit" class="btn btn-primary new-field px-4 mb-3"
                            style="background:#3b5d50; resize:none;" value="Addproduct" name="addproduct">
                    </div>
                </form>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
</section>

<?php include 'layout/footer.php'; ?>