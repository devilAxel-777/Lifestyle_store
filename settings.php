<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
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
    ?>
    <br><br><br>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-4">
                    <h1>Change Password</h1>
                    <form action="includes/setting_script.php" method="POST">
                        <div class="form-group">
                            <label for="password" style="color:#000000;">Old Password</label>
                            <input type="password" class="form-control" name="old-password" required="true">
                        </div>
                        <div class="form-group">
                            <label for="password" style="color:#000000;">New Password</label>
                            <input type="password" class="form-control" name="New_password" required="true">
                        </div>
                        <div class="form-group">
                            <label for="password" style="color:#000000;">Re-type New Password</label>
                            <input type="password" class="form-control" name="retype_new_password" required="true">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Change</button>
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