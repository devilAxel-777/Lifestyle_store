<?php
require 'includes/common.php';

$email=mysqli_real_escape_string($con,$_POST["email"]);
$password=mysqli_real_escape_string($con,$_POST["password"]);

$encrypt_pass=md5($password);

$query= "SELECT * FROM users WHERE email='$email' AND password='$encrypt_pass' ";
$query_result=mysqli_query($con,$query);

if(mysqli_num_rows($query_result)==0){
    echo "User account does not exists.";
}else{
    $row=mysqli_fetch_array($query_result);
    $_SESSION['email']=$email;
    $_SESSION['id']=$row['id'];
    
    header('location:products.php');
}


?>
