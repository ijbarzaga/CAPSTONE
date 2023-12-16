

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shayne's Sweets</title>
</head>
<body>
  <div class="container">
    <h1>Remove Account</h1>
    <div class="content">
      <form action="" method="post">
        <div class="btn_box">
          <input type="submit" value="Delete Account" class="btn" name="delete_account">
        </div>
        <div class="btn_box">
          <input type="submit" value="Cancel" class="btn" name="cancel">
        </div>
      </form>
    </div>
  </div>

  <?php
  
    $user_session = $_SESSION['username'];
    if(isset($_POST['delete_account'])){
      $delete_query = "delete from user_table where username = '$user_session'";
      $delete_result = mysqli_query($con, $delete_query);
      if($delete_result){
        session_destroy();
        echo "<script>alert('Account Deleted.')</script>";
        echo "<script>window.open('index.php','_self')</script>";
      }
    }

    if(isset($_POST['cancel'])){
      echo "<script>window.open('profile.php','_self')</script>";
    }
  
  ?>

</body>
</html>