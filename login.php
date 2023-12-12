
<?php include('header.php'); ?>
<?php

if (isset($_POST['login'])) {
    $dbConnect->login($_POST);
}

?>
<?php 
if (isset($_GET['key'])=="insert") {
    echo '<p class="alert alert-success">User registered successfully</p>';
}
?>


<section>
        <div>
<div class="container ">

                <div class="row login-form  ">
                    <div class="col-sm-6 border p-2 border-dark rounded shadow">

                        <h3>Login Form</h3>
                        <form method="POST" action="login.php">
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">User Email address :</label>
                                <input type="email" name="email" placeholder="Enter Email" class="form-control"
                                    id="email" required>

                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Password :</label>
                                <input type="password" name="password" placeholder="Enter Password" class="form-control"
                                    id="password" required>

                            </div>

                            <div class="d-flex justify-content-center">

                                <input type="submit" name="login" class="sub-btn" style="float:right;"
                                    value="Login">
                            </div>
                        </form>

                    </div>
                </div>
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