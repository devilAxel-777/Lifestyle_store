<?php
require("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!--jQuery library-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!--Latest compiled and minified JavaScript-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Products</title>
    <link rel="stylesheet" href="asg.css">
    <!--Css after bootstrap-->
</head>

<body>
    <?php
    include 'includes/header.php';
    ?>
    <br><br><br>
    <div class="content">
        <div id="banner_image" style="height: 620px; margin-bottom:0px;">
            <div class="container">
                <div class="col-xs-6">
                    <div class="table-responsive">
                        <table class="table table-hover table-responsive table-condensed" style="background-color: rgba(255,255,255,0.7); font-size:20px; color:#000000; margin-top:100px;">
                            <?php
                            $sum = 0;
                            $user_id = $_SESSION['id'];
                            $query = "SELECT p.id, p.name AS Name, p.price AS Price FROM items p INNER JOIN users_items up ON up.item_id = p.id WHERE up.user_id = '$user_id' AND up.status = 'Added to cart'";
                            $result = mysqli_query($con, $query) or die(mysqli_error($con));
                            if (mysqli_num_rows($result) >= 1) {
                            ?>
                                <thead>
                                    <tr>
                                        <th>Item Name</th>
                                        <th>Price</th>
                                        <th></th>
                                        
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                    while ($row = mysqli_fetch_array($result)) {
                                        $sum+= $row['Price'];
                                        echo "<tr><td>" . $row['Name'] . "</td><td>Rs " . $row['Price'] . "</td><td><a  href='cart_remove.php?id={$row['id']}' > Remove</a></td></tr>";
                                    }
                                    echo "<tr><td>Total</td><td>Rs " . $sum . "</td><td><a href='success.php' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                    ?>
                                    
                                </tbody>
                                <?php
                            }else
                            {
                                echo "<center background: url(img/intro-bg_1.jpg) no-repeat center center class='jumbotron'style='margin-top: 200px;background-color: rgba(0, 0, 0, 0.7);'><h2 style='color:#ff0000;'>Add items to the cart first!</h1><p>Flat 10% OFF on premium brands</p><a href='product.php' class='btn btn-danger btn-lg active'>Shop Now</a></center>";
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <?php
        include("includes/footer.php");
    ?>
</body>

</html>