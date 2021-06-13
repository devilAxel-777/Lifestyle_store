<?php
require 'includes/common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');   
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
        $user_id=$_SESSION['id'];
        $query="SELECT item_id FROM users_items WHERE user_id='$user_id'";
        $result=mysqli_query($con,$query) or die(mysqli_error($con));

        while($row=mysqli_fetch_array($result))
        {
            $item_id=$row['item_id'];
            $query_1="UPDATE users_items SET status='confirmed' WHERE item_id='$item_id'";

            $result_1=mysqli_query($con,$query_1) or die(mysqli_error($con));
        }
    ?>
    <br><br><br>
    <div class="content">
        <div class="container">
            <div class="alert alert-success">
                <center>
                Your order is Confirmed. Thank you for shopping with us.
                <a href="products.php"> Click here</a> to purchase any other item.
                </center>
            </div>
        </div>
            
    </div>
    <?php
        include 'includes/footer.php';
    ?>

</body>

</html>