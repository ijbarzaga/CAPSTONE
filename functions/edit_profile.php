<?php

var_dump($_POST);
include('com_functions.php');

session_start();

include('../includes/connect.php');

if(isset($_SESSION['auth'])){
  if(isset($_POST['update_profile'])){
    $user_id = mysqli_real_escape_string($con, $_POST['user_id']);

    $image = $_FILES['image']['name'];
    $path = "../uploaded_images";
    $image_ext = pathinfo($image, PATHINFO_EXTENSION);
    $filename = time().'.'.$image_ext;

    $full_name = mysqli_real_escape_string($con, $_POST['full_name']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email_address = mysqli_real_escape_string($con, $_POST['email_address']);
    $contact_number = mysqli_real_escape_string($con, $_POST['contact_number']);
    $full_address = mysqli_real_escape_string($con, $_POST['address']);
    
    
    $user_query = "UPDATE users_tbl SET full_name='$full_name', image='$filename', Address='$full_address', username='$username', email_address='$email_address', contact_number='$contact_number' WHERE user_id = '$user_id'";
    $user_result = mysqli_query($con, $user_query);
    if (!$user_result) {
      die("Query failed: " . mysqli_error($con));
    }
    else if($user_result){
      if (!empty($_FILES['image']['name'])) {
        move_uploaded_file($_FILES['image']['tmp_name'],$path.'/'.$filename);
      }
      redirect("../edit_info.php","User Updated Successfully.");
    }
    else{
      redirect("../edit_info.php","Something went wrong.");
    }
  }
}


?>