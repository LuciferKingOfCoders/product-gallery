<?php include('header.php'); ?>
<?php

// Insert Record in Products table
if (isset($_POST['submit'])) {
    $dbConnect->insertProduct($_POST);
}

?>

<body>
    <section>
        <div>

            <div class="container ">

                <div class="row add-form  ">
                    <div class="col-sm-8">


                        <form method="POST" action="add-product.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <h1>Add New Product</h1>

                            </div>

                            <div class="mb-3">
                                <label for="title" class="form-label"> Product title :</label>
                                <input type="text" name="title" placeholder="Enter title" class="form-control"
                                    id="title" required>

                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label"> Product price :</label>
                                <input type="text" name="price" placeholder="Enter price" class="form-control"
                                    id="price" required>

                            </div>
                            <div class="mb-3">
                                <label for="desc" class="form-label">Description :</label>
                                <textarea type="text" name="des" placeholder="Enter Description" class="form-control"
                                    id="des" required></textarea>

                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Product Image:</label>
                                <input type="file" name="file" class="form-control" id="img" required />

                            </div>


                            <div class="d-flex justify-content-center">

                                <input type="submit" name="submit" class="sub-btn" style="float:right;"
                                    value="Add Product">
                            </div>
                        </form>

                    </div>
                </div>
    </section>
</body>
<?php include('footer.php'); ?>