<?php 
  include('includes/connect.php');
  include('functions/common_function.php');

  // session_start();

  if(isset($_GET['user_id'])){
    $user_id = $_GET['user_id'];
  }

  $get_userip = getIPAddress();
  $total_price = 0;
  $cart_itemprice = "select * from cart_details where ip_address = '$get_userip'";
  $price_result = mysqli_query($con, $cart_itemprice);
  $invoice_number = mt_rand();
  $status = 'pending';
  $product_number = mysqli_num_rows($price_result);
  while($row_price = mysqli_fetch_array($price_result)){
    $product_id = $row_price['product_id'];
    $select_product = "select * from products where product_id = $product_id";
    $run_price = mysqli_query($con, $select_product);
    while($products_price = mysqli_fetch_array($run_price)){
      $product_price = array($products_price['product_price']);
      $sum_prices = array_sum($product_price);
      $total_price += $sum_prices;
    }
    
  }

  $get_cart = "select * from cart_details";
  $cart_result = mysqli_query($con, $get_cart);
  $item_quantity = mysqli_fetch_array($cart_result);
  $quantity = $item_quantity['quantity'];
  if($quantity==0){
    $quantity = 1;
    $subtotal = $total_price;
  }
  else{
    $quantity = $quantity;
    $subtotal = $total_price*$quantity;
  }

  $insert_orders = "insert into user_orders (user_id, order_amount, invoice_number, total_products, order_date, order_status)
                    values ($user_id, $subtotal, $invoice_number, $product_number, NOW(), '$status')";
  $result_query = mysqli_query($con, $insert_orders);
  if($result_query){
    echo "<script>alert('Order/s placed successfully.')</script>";
    echo "<script>window.open('profile.php', '_self')</script>";
  }

  $pending_orders = "insert into pending_orders (user_id, invoice_number, product_id, quantity, order_status)
                    values ($user_id, $invoice_number, $product_id, $quantity, '$status')";
  $pending_result = mysqli_query($con, $pending_orders);

  $empty_cart = "delete from cart_details where ip_address = '$get_userip'";
  $delete_result = mysqli_query($con, $empty_cart);
  

?>

