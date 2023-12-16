<?php

session_start();
include('includes/connect.php');

function getAll($table){
  global $con;
  $all_query = "SELECT * FROM $table";
  return $all_result = mysqli_query($con, $all_query);
}
function getAllhome($table){
  global $con;
  $all_query = "SELECT * FROM $table order by product_id desc limit 3";
  return $all_result = mysqli_query($con, $all_query);
}

function getAllProducts($table){
  global $con;
  $all_query = "SELECT * FROM $table ORDER BY rand()";
  return $all_result = mysqli_query($con, $all_query);
}
function getUniqueCategories($table){
  global $con;
  if(isset($_GET['category'])){
    $category_id = $_GET['category'];
    $all_query = "SELECT * FROM $table WHERE category_id = '$category_id'";
    return $all_result = mysqli_query($con, $all_query);
  }
}

function getUniqueOccasions($table){
  global $con;
  if(isset($_GET['occasion'])){
    $occasion_id = $_GET['occasion'];
    $all_query = "SELECT * FROM $table WHERE occasion_id = '$occasion_id'";
    return $all_result = mysqli_query($con, $all_query);
  }
}

function getLogoName($table){
  global $con;
  $all_query = "SELECT * FROM $table";
  return $all_result = mysqli_query($con, $all_query);
}

function getAbout($table){
  global $con;
  $all_query = "SELECT * FROM $table";
  return $all_result = mysqli_query($con, $all_query);
}

function getContact($table){
  global $con;
  $all_query = "SELECT * FROM $table";
  return $all_result = mysqli_query($con, $all_query);
}

function getBranch($table){
  global $con;
  $all_query = "SELECT * FROM $table";
  return $all_result = mysqli_query($con, $all_query);
}

function getAllPVEx($table, $product_id){
  global $con;
  $all_query = "SELECT * FROM $table WHERE product_id != '$product_id'";
  return $all_result = mysqli_query($con, $all_query);
}

function getAllLatest(){
  global $con;
  $all_query = "SELECT * FROM products LIMIT 3";
  return $all_result = mysqli_query($con, $all_query);
}

function redirect($url, $message){
  $_SESSION['message'] = $message;
  header('Location: '.$url);
  exit();
}

function getPByC($category_id){
  global $con;
  $all_query = "SELECT * FROM products WHERE category_id='$category_id'";
  return $all_result = mysqli_query($con, $all_query);
}

function getCategory($table, $category_id){
  global $con;
  $all_query = "SELECT * FROM $table WHERE category_id = '$category_id'";
  return $all_result = mysqli_query($con, $all_query);
}
function getPID($table, $product_id){
  global $con;
  $all_query = "SELECT * FROM $table WHERE product_id = '$product_id'";
  return $all_result = mysqli_query($con, $all_query);
}

function getCustomByID($table, $caketier_id){
  global $con;
  $all_query = "SELECT * FROM $table WHERE caketier_id = '$caketier_id'";
  return $all_result = mysqli_query($con, $all_query);
}

// function getCartItems($size_id,$flavor_id,$topper_id){
//   global $con;
//   $user_id = $_SESSION['auth_user']['user_id'];
//   $cart_query = "SELECT c.*, p.*, s.*, f.*, t.*, sn.*, c.product_qty, s.price, t.price FROM cart_tbl c, products p, sizes_tbl s, flavor_tbl f, topper_tbl t, size_name_tbl sn 
//                   WHERE c.product_id = p.product_id AND c.user_id = '$user_id' AND sn.size_name_id = s.size_name_id AND p.size_name_id = sn.size_name_id AND s.size_id = '$size_id' AND f.flavor_id = '$flavor_id' AND t.topper_id = '$topper_id' ORDER BY c.cart_id DESC";
//   $cart_result = mysqli_query($con, $cart_query);
  // $cart_query = "SELECT 
  //                   c.cart_id,
  //                   p.product_id,
  //                   p.product_name,
  //                   sn.size_name,
  //                   f.flavor_name,
  //                   t.topper_name,
  //                   s.price as size_price,
  //                   t.price as topper_price,
  //                   SUM(c.product_qty) as total_qty,
  //                   SUM(s.price + t.price) as total_price
  //               FROM 
  //                   cart_tbl c, flavor_tbl f 
  //               JOIN 
  //                   products p ON c.product_id = p.product_id
  //               JOIN 
  //                   sizes_tbl s ON p.size_name_id = s.size_name_id
  //               JOIN 
  //                   topper_tbl t ON p.topper_id = t.topper_id
  //               JOIN 
  //                   size_name_tbl sn ON sn.size_name_id = s.size_name_id
  //               WHERE 
  //                   c.user_id = '$user_id'
  //               GROUP BY 
  //                   c.product_id
  //               ORDER BY 
  //                   c.cart_id DESC";
//   $cart_result = mysqli_query($con, $cart_query);
//   if (!$cart_result) {
//     die('Error in query: ' . mysqli_error($con));
//   }

//   return $cart_result;
// }
function getCartItems(){
  global $con;
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

      // $size_details = mysqli_fetch_assoc($size_result);
      // $flavor_details = mysqli_fetch_assoc($flavor_result);
      // $topper_details = mysqli_fetch_assoc($topper_result);
      $size_details = mysqli_fetch_assoc($size_result) ?? [];
      $flavor_details = mysqli_fetch_assoc($flavor_result) ?? [];
      $topper_details = mysqli_fetch_assoc($topper_result) ?? [];

      if (!empty($size_details) && !empty($flavor_details) && !empty($topper_details)) {
        
      } else {
        
      }

      $total_price = calculateTotalPrice($size_details, $topper_details, $cart_row['product_qty']);

      $cart_items[] = [
        'cart_id' => $cart_row['cart_id'],
        'product_id' => $cart_row['product_id'],
        'product_image' => $cart_row['image'],
        'product_name' => $cart_row['product_name'],
        'writings' => $cart_row['writings'],
        'size_name' => $size_details['sizes'],
        'flavor_name' => isset($flavor_details['flavor_name']) ? $flavor_details['flavor_name'] : '',
        'topper_name' => isset($topper_details['topper_name']) ? $topper_details['topper_name'] : '',
        'size_price' => isset($size_details['price']) ? $size_details['price'] : 0,
        'topper_price' => isset($topper_details['price']) ? $topper_details['price'] : 0,
        'total_qty' => $cart_row['product_qty'],
        'total_price' => $total_price,
      ];
    }
  }
  return $cart_items;
}
function getCustomItems(){
  global $con;
  $user_id = $_SESSION['auth_user']['user_id'];
  $get_custom = "SELECT * FROM cart_tbl WHERE user_id = '$user_id'";
  return $custom_result = mysqli_query($con, $get_custom);
}

function calculateTotalPrice($size_details, $topper_details, $quantity) {
  $size_price = isset($size_details['price']) ? $size_details['price'] : 0;
  $topper_price = isset($topper_details['price']) ? $topper_details['price'] : 0;

  return ($size_price + $topper_price) * $quantity;
}

function getOrders(){
  global $con;
  $user_id = $_SESSION['auth_user']['user_id'];
  $order_query = "SELECT * FROM orders_tbl WHERE user_id = '$user_id'";
  return $order_result = mysqli_query($con, $order_query);
}
function getPOrders(){
  global $con;
  $user_id = $_SESSION['auth_user']['user_id'];
  $order_query = "SELECT * FROM orders_tbl WHERE user_id = '$user_id' AND status = '0'";
  return $order_result = mysqli_query($con, $order_query);
}
function getOPOrders(){
  global $con;
  $user_id = $_SESSION['auth_user']['user_id'];
  $order_query = "SELECT * FROM orders_tbl WHERE user_id = '$user_id' AND status = '1'";
  return $order_result = mysqli_query($con, $order_query);
}
function getTROrders(){
  global $con;
  $user_id = $_SESSION['auth_user']['user_id'];
  $order_query = "SELECT * FROM orders_tbl WHERE user_id = '$user_id' AND status = '2'";
  return $order_result = mysqli_query($con, $order_query);
}
function getComOrders(){
  global $con;
  $user_id = $_SESSION['auth_user']['user_id'];
  $order_query = "SELECT * FROM orders_tbl WHERE user_id = '$user_id' AND status = '3'";
  return $order_result = mysqli_query($con, $order_query);
}
function getCanOrders(){
  global $con;
  $user_id = $_SESSION['auth_user']['user_id'];
  $order_query = "SELECT * FROM orders_tbl WHERE user_id = '$user_id' AND status = '4'";
  return $order_result = mysqli_query($con, $order_query);
}
function getAllSize($product_id){
  global $con;
  $all_query = "SELECT p.*, sn.size_name_id, sn.size_name, s.size_id, s.size_name_id, s.sizes, s.price FROM products p, size_name_tbl sn, sizes_tbl s 
                WHERE p.product_id = '$product_id' AND sn.size_name_id = s.size_name_id AND p.size_name_id = sn.size_name_id";
  return $all_result = mysqli_query($con, $all_query);
}

function getUserMessage(){
  global $con;
  $all_query = "SELECT m.*, u.* FROM messages_tbl m, users_tbl u
                WHERE m.user_id = u.user_id";
  return $all_result = mysqli_query($con, $all_query);
}
function getAdminMessage(){
  global $con;
  $all_query = "SELECT am.*, m.*, u.* FROM admin_messages_tbl am, messages_tbl m, users_tbl u
                WHERE am.message_id = m.messages_id AND m.user_id = u.user_id";
  return $all_result = mysqli_query($con, $all_query);
}
function getUserNotification($table){
  global $con;
  $all_query = "SELECT * FROM $table WHERE role = 1";
  return $all_result = mysqli_query($con, $all_query);
}

function trackingNoValidity($trackingNo){
  global $con;
  $user_id = $_SESSION['auth_user']['user_id'];
  $trackNo_query = "SELECT * FROM orders_tbl WHERE tracking_no = '$trackingNo' AND user_id = '$user_id'";
  return mysqli_query($con, $trackNo_query);
}

?>