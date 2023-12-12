<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="./style/style.css" rel="stylesheet">
</head>
<?php

include 'database.php';
if((isset($_GET['action']))=="login"){
    header("location:login.php");
}


$dbConnect = new database();
?>

<body>
    <div class="header">
        <div class="row">
            <div class="col-sm-7 ">
                <h1 class="mx-5"><a href="index.php"> <span class=" text-white ">
                            Products Gallery</span></a> </h1>
            </div>
            <div class="col-sm-2">
                <ul class=" nav ">
                    <li><a href="users.php"> All Users </a></li>
                </ul>
            </div>

            <div class="col-sm-3">

                <ul class="header-elements">
                    <?php 
                    session_start();
                    if(isset($_SESSION["name"])){
                        echo '<li><a href="logout.php">logout</a></li>';
                    }
                    else{
                        echo '<li><a href="login.php">Login</a></li>';
                        echo '<li><a href="register.php">Register</a></li>';
                    }
                    ?>


                </ul>
            </div>

        </div>



    </div>

</body>

</html>