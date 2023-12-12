<?php include('header.php'); ?>
<style>
.quantity {
    display: flex;
    align-items: center;
}

.quantity label {
    margin-right: 10px;
}

.quantity input {
    width: 50px;
    padding: 5px;
    text-align: center;
}

.price {
    font-size: 18px;
    font-weight: bold;
}
</style>




<section class="container  ">
    <div class="d-flex justify-content-between">
        <div class="home-title">
            <p>All Products</p>
        </div>
        <?php 
   if(isset($_SESSION["name"])){
echo '<a class="sub-btn mt-2" style="height: 38px;" href="add-product.php"> Add more</a> ';
   }
    ?>

    </div>
    <div class="row">

        <?php
                $products = $dbConnect->getProducts();
                if($products){

                foreach ($products as $item) {
                

            ?>

        <div class="col-sm-4">
            <div class="p-2 card card-style">
                <img src="image/<?php echo $item['img'] ?>" alt="">
                <div class="product-title fs-4" style="font-weight:bold;"><?php echo $item['title'] ?></div>
                <div><?php echo $item['des'] ?></div>
                <div class=" justify-content-between mt-2">
                    <span class="price">$<?php echo $item['price'] ?></span>
                    <div class="d-flex align-items-center">
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" min="1" value="1">
                    </div>
                    <button class="btn btn-primary">Buy</button>
                </div>
                <?php
        if (isset($_SESSION["name"])) {
            ?>
                <div class="d-flex justify-content-around mt-2 rounded">
                    <button class="btn btn-success mr-2">
                        <a class="text-white" href="edit-product.php?editId=<?php echo $item['id'] ?>">Edit</a>
                    </button>
                    <button class="btn btn-danger">
                        <a class="text-white" href="index.php?deleteProduct=<?php echo $item['id'] ?>"
                            onclick="return confirm('Are you sure want to delete this record')">Delete</a>
                    </button>
                </div>
                <?php } ?>
            </div>
        </div>


        <?php }
        }
        
        ?>

    </div>

</section>

<script>
$(Document).ready(() => {
    setInterval(() => {
        $('.alert').fadeOut();

    }, 3000);

})
</script>



<?php include('footer.php'); ?>