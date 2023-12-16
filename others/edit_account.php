<?php

  if(isset($_GET['edit_account'])){
    $session_username = $_SESSION['username'];
    $select_user = "select * from user_table where username = '$session_username'";
    $user_result = mysqli_query($con, $select_user);
    $user_row = mysqli_fetch_assoc($user_result);
    $user_id = $user_row['user_id'];
    $full_name = $user_row['full_name'];
    $email_address = $user_row['email_address'];
    $contact_number = $user_row['contact_number'];
    $full_address = $user_row['full_address'];
    $username = $user_row['username'];
  }
  if(isset($_POST['update_account'])){
    $id_update = $user_id;
    $full_name = $_POST['full_name'];
    $email_address = $_POST['email_address'];
    $contact_number = $_POST['contact_number'];
    $full_address = $_POST['full_address'];
    $username = $_POST['u_username'];

    $update_info = "update user_table set full_name='$full_name', email_address='$email_address', contact_number=$contact_number, full_address='$full_address', username='$username' where user_id = $id_update";
    $update_result = mysqli_query($con, $update_info);
    if($update_result){
      echo "<script>alert('Account information updated.')</script>";
      echo "<script>window.open('logout.php','_self')</script>";
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shayne's Sweets</title>
</head>
<body>
  <div class="conntainer">
    <h1>User Account</h1>
    <div class="edit-field">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="input_box">
          <span>Full Name</span>
          <input type="text" class="input" autocomplete="off" required value="<?php echo $full_name; ?>" name="full_name">
        </div>
        <div class="input_box">
          <span>Email</span>
          <input type="email" class="input" autocomplete="off" value="<?php echo $email_address; ?>" name="email_address">
        </div>
        <div class="input_box">
          <span>Contact No.</span>
          <input type="number" class="input" autocomplete="off" required value="<?php echo $contact_number; ?>" name="contact_number">
        </div>
        <div class="inputBox">
          <span>Full Address</span>
          <textarea name="full_address" autocomplete="off" maxlength="500" cols="30" rows="5" class="input"><?php echo $user_row['full_address']; ?></textarea>
        </div>
        <div class="input_box">
          <span>Username</span>
          <input type="text" class="input" autocomplete="off" value="<?php echo $username; ?>" name="u_username">
        </div>
        <!-- <div class="input_box">
          <span>Password</span>
          <input type="password" class="input" placeholder="Your password..." name="user_password">
        </div>
        <div class="input_box">
          <span>Confirm Password</span>
          <input type="password" class="input" placeholder="Confirm your password..." name="confirm_password">
        </div> -->
        <input type="submit" value="Update" class="btn" name="update_account">
      </form>
    </div>
  </div>
</body>
</html>