<?php include('header.php'); ?>

<?php
if (!isset($_SESSION["name"])) {

    echo '<script>
    alert("First login to access this page");
   window.location.href="index.php?action=login";
    </script>';   
}

?>

<?php 
if (isset($_GET['key'])=="insert") {
    echo '<p class="alert alert-success">User registered successfully</p>';
}
?>


<section class="container ">
    <div class="pt-2">
        <h3>
            <p>
                All Register Users
            </p>
            <?php 
   if($_SESSION["name"]=="admin"){
echo '<a class="sub-btn mt-2" style="height: 38px;" href="add.php"> Add User</a> ';
   }
    ?>
        </h3>
    </div>
    <div class="section">
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>Address</th>
                        <?php 
                         if($_SESSION["name"]=="admin"){
                            echo '<th>Action</th> ';
                               }
                        ?>



                </thead>
                <tbody>
                    <?php
                    $users = $dbConnect->allUser();
                    foreach ($users as $item) {
                    ?>
                    <tr>
                        <td><?php echo $item['id'] ?></td>
                        <td><?php echo $item['name'] ?></td>
                        <td><?php echo $item['email'] ?></td>
                        <td><?php echo $item['phone'] ?></td>
                        <td><?php echo $item['city'] ?></td>
                        <td><?php echo $item['address'] ?></td>
                        <?php
                    if($_SESSION["name"]=="admin"){
                        ?>
                        <td>
                            <button class="btn btn-success mr-2"><a class="text-white"
                                    href="edit.php?editId=<?php echo $item['id'] ?>">
                                    Edit</a>
                            </button>
                            <button class="btn btn-danger "><a class="text-white"
                                    href="index.php?deleteUser=<?php echo $item['id'] ?>"
                                    onclick="return confirm('Are you sure want to delete this record')"> delete</a>
                            </button>
                        </td>
                        <?php } ?>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
<script>
$(Document).ready(() => {
    setInterval(() => {
        $('.alert').fadeOut();

    }, 3000);

})
</script>