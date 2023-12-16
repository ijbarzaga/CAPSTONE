<?php

session_start();
include('../includes/connect.php');

if(isset($_SESSION['auth'])){
  if(isset($_POST['scope'])){
    $scope = $_POST['scope'];
    switch($scope){
      case 'add':
        $product_id = $_POST['product_id'];
        $prod_qty = $_POST['prod_qty'];
        $user_id = $_SESSION['auth_user']['user_id'];
        $size_id = $_POST['size_id'];
        $flavor_id = $_POST['flavor_id'];
        $topper_id = $_POST['topper_id'];
        $writings = $_POST['writings'];

        $item_exist = "SELECT * FROM cart_tbl WHERE product_id = '$product_id' AND user_id = '$user_id'";
        $exist_result = mysqli_query($con, $item_exist);
        if(mysqli_num_rows($exist_result)>0){
          echo "existing";
        }
        else{
          $to_cart = "INSERT INTO cart_tbl (user_id, product_id, size_id, flavor_id, topper_id, writings, product_qty) 
                      VALUES ('$user_id','$product_id','$size_id','$flavor_id','$topper_id','$writings','$prod_qty')";
          $tocart_result = mysqli_query($con, $to_cart);
          if($tocart_result){
            echo 200;
          }
          else{
            echo 500;
          }
        }
        break;
      case "update":
        $product_id = $_POST['product_id'];
        $prod_qty = $_POST['prod_qty'];
        $user_id = $_SESSION['auth_user']['user_id'];

        $item_exist = "SELECT * FROM cart_tbl WHERE product_id = '$product_id' AND user_id = '$user_id'";
        $exist_result = mysqli_query($con, $item_exist);
        if(mysqli_num_rows($exist_result)>0){
          $cart_update = "UPDATE cart_tbl SET product_qty='$prod_qty' WHERE product_id = '$product_id' AND user_id = '$user_id'";
          $update_result = mysqli_query($con, $cart_update);
          if($update_result){
            echo 200;
          }
          else{
            echo 500;
          }
        }
        else{
          echo "Something went wrong";
        }
        break;
      case "delete":
        $cart_id = $_POST['cart_id'];
        $user_id = $_SESSION['auth_user']['user_id'];

        $item_exist = "SELECT * FROM cart_tbl WHERE cart_id = '$cart_id' AND user_id = '$user_id'";
        $exist_result = mysqli_query($con, $item_exist);
        if(mysqli_num_rows($exist_result)>0){
          $cart_delete = "DELETE FROM cart_tbl WHERE cart_id = '$cart_id'";
          $delete_result = mysqli_query($con, $cart_delete);
          if($delete_result){
            echo 200;
          }
          else{
            echo "Something went wrong";
          }
        }
        else{
          echo "Something went wrong";
        }
        break;
      default:
        echo 500;
    }
  }
  
  
  if(isset($_POST['add-custom'])){
    $user_id = $_SESSION['auth_user']['user_id'];
    // Cake Tier
    if (isset($_POST['cakeTier'])) {
        $cakeTier = $_POST['cakeTier'];
    }

    // Cake Type
    if (isset($_POST['cakeType'])) {
        $cakeType = $_POST['cakeType'];
    }

    // Cake Size
    if (isset($_POST['cakeSize'])) {
        $cakeSize = $_POST['cakeSize'];
    }

    // Cake Flavor
    if (isset($_POST['cakeFlavor'])) {
        $cakeFlavor = $_POST['cakeFlavor'];
    }

    // Fillings
    if (isset($_POST['fillings'])) {
        $fillings = $_POST['fillings'];
    }

    // Cake Coating
    if (isset($_POST['cakeCoating'])) {
        $cakeCoating = $_POST['cakeCoating'];
    }

    // Frosting Color
    if (isset($_POST['frostingColor'])) {
        $frostingColor = $_POST['frostingColor'];
    }

    // Second Frosting Color (optional)
    if (isset($_POST['frostingColor2'])) {
        $frostingColor2 = $_POST['frostingColor2'];
    }

    // Message (optional)
    if (isset($_POST['message'])) {
        $message = $_POST['message'];
    }

    // Toppers
    if (isset($_POST['toppers'])) {
        $toppers = $_POST['toppers'];
    }

    // Toppings 1
    if (isset($_POST['toppings1'])) {
        $toppings1 = $_POST['toppings1'];
    }

    // Toppings 2 (optional)
    if (isset($_POST['toppings2'])) {
        $toppings2 = $_POST['toppings2'];
    }
    
    
    $custom_insert = "INSERT INTO cart_tbl (user_id, writings,cake_tier,cake_type,cake_size,cake_flavor,cake_fillings,cake_coating,frosting_color,frosting_color2,toppers,toppings1,toppings2) VALUES ('$user_id','$message','$cakeTier','$cakeType','$cakeSize','$cakeFlavor','$fillings','$cakeCoating','$frostingColor','$frostingColor2','$toppers','$toppings1','$toppings2')";
        $custom_result = mysqli_query($con, $custom_insert);
        if($custom_result){
            header("Location: ../cart.php");
            $_SESSION['message'] = "Custom Cake added to cart.";
        }
        else{
            $_SESSION['message'] = "Something went wrong.";
        }
    
    }
    else if(isset($_POST['remove_custom'])){
        $cart_id = mysqli_real_escape_string($con, $_POST['cart_id']);
        
        $delete_custom = "DELETE FROM cart_tbl WHERE cart_id = '$cart_id'";
        $custom_result = mysqli_query($con, $delete_custom);
        if($custom_result){
            header("Location: ../cart.php");
            $_SESSION['message'] = "Item remove from cart.";
        }
        else{
            header("Location: ../cart.php");
            $_SESSION['message'] = "Something went wrong.";
        }
    
    }
  
}
else{
  echo 401;
}

?>