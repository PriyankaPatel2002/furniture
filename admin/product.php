<?php include 'layout/head.php'; 
include '../dbconnect/config.php';
?>
<section class="user-table">
    <div class="container">
        <div class="row">
            
            <table class="table">
                <thead>
                    <tr class="table-dark">
                        <th scope="col">Product ID</th>
                        <th scope="col">Product  Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Brand</th>
                        <th scope="col"> Price</th>
                        <th scope="col">Image </th>
                        <th scope="col">Description</th>
                        <th scope="col">Create Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                        $query ="Select * from product";
                        $result = mysqli_query($con,$query);
                        if(mysqli_num_rows($result))
                        {
                            while($row = mysqli_fetch_assoc($result)){
                                //print_r($row);
                    ?>
                    <tr>
                        <th scope="row"><?= $row['pid']; ?></th>
                        <td><?= $row['productname']; ?></td>
                        <td><?= $row['category']; ?></td>
                        <td><?= $row['brand']; ?></td>
                        <td><?= $row['price']; ?></td>
                        <td><img src="productimage/<?= $row['image']; ?>"  height="50px" width="50px"/></td>
                        <td><?= $row['description']; ?></td>
                        <td><?= $row['created_at']; ?></td>
                        <td><a href="#" class="btn btn-primary me-3"><i class="fa-solid fa-user-pen"></i></a>
                        <a href='<?php echo "deleteproduct.php?id=$row[pid]";?>' class="btn btn-danger "><i class="fa-solid fa-trash-can"></i></a></td>
                    </tr>
                    <?php
                          }
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</section>

<?php include 'layout/footer.php'; ?>