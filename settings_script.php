<?php
require 'includes/common.php';
if(isset($_SESSION['email'])){
    header('location:index.php');   
}else{
    $user_id=$_SESSION['id'];
    $email=$_SESSION['email'];

    $new_password=md5(mysqli_real_escape_string($con,$_POST['New_password']));
    $retype_password=md5(mysqli_real_escape_string($con,$_POST['retype_new_password']));

    if($new_password!=$retype_password){
        echo "Passwords should match. Try Again.";
    }else{
        $query ="UPDATE users SET password='$new_password' WHERE email='$email' AND id='$user_id'";
        $result = mysqli_query($con,$query) or die(mysqli_error($con));

        header("location: settings.php");
    }
}
?>


