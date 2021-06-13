<?php
    require "includes/common.php";
    
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $name = mysqli_real_escape_string($con, $_POST["name"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);
    $contact = mysqli_real_escape_string($con, $_POST["contact"]);
    $city = mysqli_real_escape_string($con, $_POST["city"]);
    $address = mysqli_real_escape_string($con, $_POST["address"]);
    
    $encrypt_password = md5($password);
    $query1 = "SELECT id FROM users WHERE email = '$email' AND password = '$encrypt_password'";
    $query2 = "INSERT INTO users (name, email, password, contact, city, address) VALUES ('$name', '$email', '$encrypt_password', '$contact', '$city', '$address')";

    // check if already registered user
    $result = mysqli_query($con, $query1);
    if(mysqli_num_rows($result) > 0){
        // email already exists
        echo "Email id already exists. Try another";
    }else{
        
        $result = mysqli_query($con, $query2);
        $_SESSION["email"] = $email;
        $_SESSION["id"] = mysqli_insert_id($con);

        // redirect to products page
        header("location: products.php");
    }
?>