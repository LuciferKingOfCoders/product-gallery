<?php include('header.php'); ?>
<?php

// Insert Record in user table
if (isset($_POST['submit'])) {
    $dbConnect->insertData($_POST);
}

?>

<body>
    <section>
        <div>
            
            <div class="container ">

                <div class="row add-form  ">
                    <div class="col-sm-8">


                        <form method="POST" action="add.php">
                            <div class="row">
                            <div class="col-sm-6 mb-3">
                                <label for="name" class="form-label">User Name :</label>
                                <input type="text" name="name" placeholder="Enter Name" class="form-control" id="name"
                                    required>

                            </div>
                            <div class="col-sm-6 mb-3">
                                <label for="email" class="form-label">Email User address :</label>
                                <input type="email" name="email" placeholder="Enter Email" class="form-control"
                                    id="email" required>

                            </div>
                            </div>

                            <div class="row">
                            <div class="col-sm-6 mb-3">
                                <label for="email" class="form-label">Password :</label>
                                <input type="password" name="password" placeholder="Enter Password" class="form-control"
                                    id="password" required>

                            </div>

                            <div class="col-sm-6 mb-3">
                                <label for="phone" class="form-label">User Phone Number :</label>
                                <input type="number" name="phone" placeholder="Enter Phone Number" class="form-control"
                                    id="phone" required>

                            </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="city" class="form-label">User City :</label>
                                <input type="text" name="city" placeholder="Enter city" class="form-control" id="city">

                            </div>

                            <div class="d-flex justify-content-center">
                                
                                        <input type="submit" name="submit" class="sub-btn" style="float:right;"
                                        value="Add User">
                                    
                                
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php include('footer.php'); ?>