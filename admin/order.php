<?php include 'layout/head.php'; 
include '../dbconnect/config.php';
?>
<section class="user-table">
    <div class="container">
        <div class="row">
            <table class="table">
                <thead>
                    <tr class="table-dark">
                        <th scope="col">#Id</th>
                        <th scope="col">First_name</th>
                        <th scope="col">Last_name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Role</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $query = "SELECT * FROM users";
                        $result = mysqli_query($con,$query);
                        if(mysqli_num_rows($result)>0)
                        {
                            while($row = mysqli_fetch_assoc($result)){

                    ?>

                    <tr>
                        <th scope="row"><?= $row['Id'] ?></th>
                        <td><?= $row['firstname'] ?></td>
                        <td><?= $row['lastname'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['phone'] ?></td>
                        <td><?= $row['roll'] ?></td>
                        <td><?= $row['timestamp'] ?></td>
                        <td><a class="btn btn-primary me-3"><i class="fa-solid fa-user-pen"></i></a><a class="btn btn-danger"><i class="fa-solid fa-trash"></i></a></td>
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