<?php

session_start();
include('../includes/connect.php');

function redirect($url, $message){
  $_SESSION['message'] = $message;
  header('Location: '.$url);
  exit();
}

function getAll($table){
  global $con;
  $all_query = "SELECT * FROM $table";
  return $all_result = mysqli_query($con, $all_query);
}

function getAllTiers(){
  global $con;
  $all_query = "SELECT ct.*, sn.* FROM caketier_tbl ct, size_name_tbl sn WHERE ct.size_name_id = sn.size_name_id";
  return $all_result = mysqli_query($con, $all_query);
}

function getAllUMessage($table){
  global $con;
  $all_query = "SELECT user_id, name, subject, messages_id, MAX(message) as latest_message FROM $table WHERE role IS NULL OR role != 1 GROUP BY user_id";
  return $all_result = mysqli_query($con, $all_query);
}

function getAllAdmin($table){
  global $con;
  $all_query = "SELECT * FROM $table WHERE role = '1'";
  return $all_result = mysqli_query($con, $all_query);
}
function getAdmin($table,$user_id){
  global $con;
  $all_query = "SELECT * FROM $table WHERE role = '1' AND user_id = '$user_id'";
  return $all_result = mysqli_query($con, $all_query);
}
function getAllUsers($table){
  global $con;
  $all_query = "SELECT * FROM $table WHERE role = '0'";
  return $all_result = mysqli_query($con, $all_query);
}

function getCByID($table, $category_id){
  global $con;
  $all_query = "SELECT * FROM $table WHERE category_id = '$category_id'";
  return $all_result = mysqli_query($con, $all_query);
}

function getOByID($table, $occasion_id){
  global $con;
  $all_query = "SELECT * FROM $table WHERE occasion_id = '$occasion_id'";
  return $all_result = mysqli_query($con, $all_query);
}

function getAByID($table, $id){
  global $con;
  $all_query = "SELECT * FROM $table WHERE id = '$id'";
  return $all_result = mysqli_query($con, $all_query);
}
function getContactByID($table, $contact_id){
  global $con;
  $all_query = "SELECT * FROM $table WHERE contact_id = '$contact_id'";
  return $all_result = mysqli_query($con, $all_query);
}
function getBranchByID($table, $branch_id){
  global $con;
  $all_query = "SELECT * FROM $table WHERE branch_id = '$branch_id'";
  return $all_result = mysqli_query($con, $all_query);
}
function getLNByID($table, $id){
  global $con;
  $all_query = "SELECT * FROM $table WHERE id = '$id'";
  return $all_result = mysqli_query($con, $all_query);
}

function getPByID($table, $product_id){
  global $con;
  $all_query = "SELECT * FROM $table WHERE product_id = '$product_id'";
  return $all_result = mysqli_query($con, $all_query);
}
function getAllOrders(){
  global $con;
  $all_query = "SELECT * FROM orders_tbl";
  return $all_result = mysqli_query($con, $all_query);
}
function getAllPOrders(){
  global $con;
  $all_query = "SELECT * FROM orders_tbl WHERE status = '0'";
  return $all_result = mysqli_query($con, $all_query);
}
function getAllOPOrders(){
  global $con;
  $all_query = "SELECT * FROM orders_tbl WHERE status = '1'";
  return $all_result = mysqli_query($con, $all_query);
}
function getAllTROrders(){
  global $con;
  $all_query = "SELECT * FROM orders_tbl WHERE status = '2'";
  return $all_result = mysqli_query($con, $all_query);
}
function getAllComOrders(){
  global $con;
  $all_query = "SELECT * FROM orders_tbl WHERE status = '3'";
  return $all_result = mysqli_query($con, $all_query);
}
function getAllCanOrders(){
  global $con;
  $all_query = "SELECT * FROM orders_tbl WHERE status = '4'";
  return $all_result = mysqli_query($con, $all_query);
}
function getAllSize(){
  global $con;
  $all_query = "SELECT sn.size_name_id, sn.size_name, s.size_id, s.size_name_id, s.sizes, s.price FROM size_name_tbl sn, sizes_tbl s 
                WHERE sn.size_name_id = s.size_name_id";
  return $all_result = mysqli_query($con, $all_query);
}
function getSizeNameByID($table, $size_id){
  global $con;
  $all_query = "SELECT * FROM $table WHERE size_id = '$size_id'";
  return $all_result = mysqli_query($con, $all_query);
}
function getFlavorByID($table, $flavor_id){
  global $con;
  $all_query = "SELECT * FROM $table WHERE flavor_id = '$flavor_id'";
  return $all_result = mysqli_query($con, $all_query);
}
function getTopperByID($table, $topper_id){
  global $con;
  $all_query = "SELECT * FROM $table WHERE topper_id = '$topper_id'";
  return $all_result = mysqli_query($con, $all_query);
}

function getUserMessages($table, $user_id){
  global $con;
  $all_query = "SELECT * FROM $table
                WHERE user_id = '$user_id'";
  return $all_result = mysqli_query($con, $all_query);
}

function getAdminMessage(){
  global $con;
  $all_query = "SELECT am.*, m.*, u.* FROM admin_messages_tbl am, messages_tbl m, users_tbl u
                WHERE am.message_id = m.messages_id AND m.user_id = u.user_id";
  $all_result = mysqli_query($con, $all_query);
  if (!$all_result) {
    die('Error in SQL query (admin message): ' . mysqli_error($con));
  }
  return $all_result;
}

function getAdminNotification($table){
  global $con;
  $all_query = "SELECT * FROM $table";
  return $all_result = mysqli_query($con, $all_query);
}

function trackingNoValidity($trackingNo){
  global $con;
  $trackNo_query = "SELECT * FROM orders_tbl WHERE tracking_no = '$trackingNo'";
  return mysqli_query($con, $trackNo_query);
}

?>