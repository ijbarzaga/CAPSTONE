<?php

  session_start();
  include('../includes/connect.php');

  if(isset($_SESSION['auth'])){

    if(isset($_POST['place_order'])){
      if(!empty($_POST['payment_mode'])){
        $payment_mode = $_POST['payment_mode'];
      }
      else{
        echo "Please selecta payment mode.";
      }

      $full_name = mysqli_real_escape_string($con, $_POST['full_name']);

      $c_num = mysqli_real_escape_string($con, $_POST['contact_number']);
      $c_num1 = mysqli_real_escape_string($con, $_POST['contact_number1']);

      if($c_num1 != ""){
        $contact_number = $c_num1;
      }
      else{
        $contact_number = $c_num;
      }

      $address = mysqli_real_escape_string($con, $_POST['full_address']);
      $address1 = mysqli_real_escape_string($con, $_POST['full_address1']);

      if($address1 != ""){
        $full_address = $address1;
      }
      else{
        $full_address = $address;
      }

      $email_address = mysqli_real_escape_string($con, $_POST['email_address']);
      $date = mysqli_real_escape_string($con, $_POST['date']);
      $payment_id = mysqli_real_escape_string($con, $_POST['payment_id']);

      $user_id = $_SESSION['auth_user']['user_id'];
      $cart_query = "SELECT 
                        c.cart_id,
                        p.product_id,
                        p.image,
                        p.product_name,
                        c.product_qty,
                        c.size_id,
                        c.flavor_id,
                        c.topper_id,
                        c.writings
                    FROM 
                        cart_tbl c
                    JOIN 
                        products p ON c.product_id = p.product_id
                    WHERE 
                        c.user_id = '$user_id'
                    ORDER BY 
                        c.cart_id DESC";

      $cart_result = mysqli_query($con, $cart_query);

      // Check for query execution error
      if (!$cart_result) {
        die('Error in query: ' . mysqli_error($con));
      }

      $cart_items = [];

      if ($cart_result->num_rows > 0) {
        while ($cart_row = mysqli_fetch_assoc($cart_result)) {
          $size_id = $cart_row['size_id'];
          $flavor_id = $cart_row['flavor_id'];
          $topper_id = $cart_row['topper_id'];

          // Fetch additional details for each part
          $size_query = "SELECT * FROM sizes_tbl WHERE size_id = '$size_id'";
          $flavor_query = "SELECT * FROM flavor_tbl WHERE flavor_id = '$flavor_id'";
          $topper_query = "SELECT * FROM topper_tbl WHERE topper_id = '$topper_id'";

          $size_result = mysqli_query($con, $size_query);
          $flavor_result = mysqli_query($con, $flavor_query);
          $topper_result = mysqli_query($con, $topper_query);

          // Check for query execution errors
          if (!$size_result || !$flavor_result || !$topper_result) {
            die('Error in query: ' . mysqli_error($con));
          }

          $size_details = mysqli_fetch_assoc($size_result);
          $flavor_details = mysqli_fetch_assoc($flavor_result);
          $topper_details = mysqli_fetch_assoc($topper_result);

          $cart_items[] = [
            'cart_id' => $cart_row['cart_id'],
            'product_id' => $cart_row['product_id'],
            'product_image' => $cart_row['image'],
            'product_name' => $cart_row['product_name'],
            'writings' => $cart_row['writings'],
            'size_name' => $size_details['sizes'],
            'flavor_name' => $flavor_details['flavor_name'],
            'topper_name' => $topper_details['topper_name'],
            'size_price' => $size_details['price'],
            'topper_price' => $topper_details['price'],
            'total_qty' => $cart_row['product_qty'],
            'total_price' => ($size_details['price'] + $topper_details['price']) * $cart_row['product_qty']
          ];
        }
      }

      $total_amount = 0;
      foreach ($cart_items as $item) {
          $total_amount += $item['total_price'];
      }

      $tracking_no = "HA-" . rand(1111, 9999) . substr($contact_number, 2);

      $insert_info = "INSERT INTO orders_tbl (tracking_no, user_id, full_name, email_address, contact_no, full_address, date, total_amount, payment_mode, payment_id) 
                      VALUES ('$tracking_no','$user_id','$full_name','$email_address','$contact_number','$full_address','$date','$total_amount','$payment_mode','$payment_id')";
      $info_result = mysqli_query($con, $insert_info);
      if($info_result){
        $order_id = mysqli_insert_id($con);

        foreach ($cart_items as $item) {
          $product_id = $item['product_id'];
          $product_qty = $item['total_qty'];
          $price = $item['total_price'];
          $writings = $item['writings'];
          $size_name = $item['size_name'];
          $flavor_name = $item['flavor_name'];
          $topper_name = $item['topper_name'];
      
          $insert_order = "INSERT INTO order_items_tbl (order_id, product_id, product_qty, size_name, flavor_name, topper_name, writings, price) 
                          VALUES ('$order_id','$product_id','$product_qty','$size_name','$flavor_name','$topper_name','$writings','$price')";
          $order_items = mysqli_query($con, $insert_order);
      }

        $remove_cartitems = "DELETE FROM cart_tbl WHERE user_id = '$user_id'";
        $cartitems_result = mysqli_query($con, $remove_cartitems);

        $_SESSION['message'] = "Order is placed.";
        header('Location: ../user_orders.php?pending');
        die();
      }
      else{

      }
      
    }

  }
  else{
    header('Location: ../index.php');
  }

?>