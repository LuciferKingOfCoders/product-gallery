<?php include('header.php'); ?>
<?php

// Edit product data
if (isset($_GET['editId']) && !empty($_GET['editId'])) {
    $editId = $_GET['editId'];
    $product = $dbConnect->getProductById($editId);
}

// Update Product data
if (isset($_POST['update'])) {
    $dbConnect->updateProductRecord($_POST);
}

?>

<body>
    <section>
        <div>

            <div class="container ">

                <div class="row add-form  ">
                    <div class="col-sm-8">


                        <form method="POST" action="edit-product.php" enctype="multipart/form-data">
                            <div class="mb-3">
                                <h1>Edit Product</h1>

                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label"> Product title :</label>
                                <input type="text" name="title" placeholder="Enter title" class="form-control"
                                    value="<?php echo $product['title']; ?>" id="title" required>

                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label"> Product price :</label>
                                <input type="text"
                                    name="price                                                                                          "
                                    placeholder="Enter price" class="form-control"
                                    value="<?php echo $product['price']; ?>" id="price" required>

                            </div>
                            <div class="mb-3">
                                <label for="desc" class="form-label">Description :</label>
                                <textarea type="text" name="des" placeholder="Enter Description" class="form-control"
                                    value="<?php echo $product['des']; ?>" id="des"
                                    required><?php echo $product['des']; ?></textarea>

                            </div>

                            <div class="mb-3">
                                <label for="image" class="form-label">Product Image:</label>
                                <input type="file" name="img" class="form-control" id="img" required />


                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Old Image:</label>
                                <img src="image/<?php echo $product['img']; ?>" width="200px" alt="">
                            </div>

                            <div class="d-flex justify-content-center">
                                <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                                <input type="submit" name="update" class="sub-btn" style="float:right;" value="Update">
                            </div>
                        </form>

                    </div>
                </div>
    </section>
</body>
<?php include('footer.php'); ?>