<?php
require 'includes/common.php';
if(isset($_SESSION['email'])){
    header('location:products.php');   
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Images in Bootstrap</title>
    <link rel="stylesheet" href="asg.css">
    <!--Css after bootstrap-->
</head>

<body>
    <?php
        include 'includes/header.php';
    ?>  
    <br><br><br>
    <div class="content">
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-xs-offset-4">
                <h1>SIGN UP</h4>
                <form method="POST" action="signup_script.php">
                    <div class="form-group">
                        <input type="text" class="form-control " name="name" placeholder="Name" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control " name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control " name="password" placeholder="Password" pattern=".{6,}">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control " name="contact" placeholder="Contact" >
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control " name="city" placeholder="City" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control " name="address" placeholder="Address" >
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>               
            </div>
        </div>
    </div>
    </div>
    <?php
        include 'includes/footer.php';
    ?>
    
</body>

</html>