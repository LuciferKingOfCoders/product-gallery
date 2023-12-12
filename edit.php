<?php include('header.php'); ?>
<?php

// Edit user data
if (isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $user = $dbConnect->getUserById($editId);
}

// Update user data
if (isset($_POST['update'])) {
    $dbConnect->updateRecord($_POST);
}

?>

<body>
    <section>
        <div>
            <div class="head">
                <h3><span class="back"><a href="index.php">Back</a> </span> / <span>Edit User</span> </h3>
            </div>
            <div class="container ">

                <div class="row add-form  ">
                    <div class="col-sm-8">


                        <form method="POST" action="edit.php">
                            <div class="row">
                            <div class="col-sm-6 mb-3">
                                <label for="name" class="form-label">User Name :</label>
                                <input type="text" name="name" value="<?php echo $user['name']; ?>"
                                    placeholder="Enter Name" class="form-control" id="name" required>

                            </div>
                            <div class="col-sm-6 mb-3">
                                <label for="email" class="form-label">Email User address :</label>
                                <input type="email" name="email" value="<?php echo $user['email']; ?>"
                                    placeholder="Enter Email" class="form-control" id="email" required>

                            </div>
                            </div>
                            
                            <div class="row">
                            <div class="col-sm-6 mb-3">
                                <label for="phone" class="form-label">User Phone Number :</label>
                                <input type="number" name="phone" value="<?php echo $user['phone']; ?>"
                                    placeholder="Enter Phone Number" class="form-control" id="phone" required>

                            </div>

                            <div class="col-sm-6 mb-3">
                                <label for="email" class="form-label">Password :</label>
                                <input type="password" name="password" placeholder="Enter Password" class="form-control"
                                    id="password" required>

                            </div>
                            </div>
                            <div class=" mb-3">
                                <label for="city" class="form-label">User City :</label>
                                <input type="text" name="city" value="<?php echo $user['city']; ?>"
                                    placeholder="Enter city" class="form-control" id="city">

                            </div>
                            
                            

                            <div class="d-flex justify-content-center">
                                <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
                                <input type="submit" name="update" class="sub-btn" style="float:right;"
                                    value="Update User">
                            </div>
                        </form>

                    </div>
                </div>
    </section>
</body>
<?php include('footer.php'); ?>