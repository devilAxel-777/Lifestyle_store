<?php
function check_if_added_to_cart($item_id)
{
    $user_id=$_SESSION['id'];
    $con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
    
    $query="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id='$user_id' AND status='Added to cart'";

    $query_result=mysqli_query($con,$query);
    if(mysqli_num_rows($query_result)>=1){
        return TRUE;
    }else{
        return FALSE;
    }
}

?>