<?php 
  include('includes/connect.php');
  include('functions/common_function.php');

  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Shayne's Sweets</title>
  
  <style>
    *{
      margin: 0;
      padding: 0;
    }
    header{
      top: 0; right: 0; left: 0;
      background-color: black;
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: sticky;
      padding:1rem 2%;
      z-index: 999;
    }
    .logo{
      display: flex;
      align-items: 2rem;
    }
    .nav-bar a{
      font-size: 15px;
      margin-right: 2rem;
      color: white;
      text-decoration: none;
    }
    .nav-bar a:hover{
      border-bottom: .1rem solid #e859a6;
      padding-bottom: .4rem;
    }
    .icons a{
      margin-right: 1.5rem;
      text-decoration: none;
      color: white;
    }
    .icons .to-edit{
      margin-right: 3rem;
    }

    sup{
      color: white;
      text-align: center;
      position: absolute;
      padding: 2px;
      border: 1px solid pink;
      border-radius: 10px;
    }

  </style>
</head>
<body>
  <header>
    <div class="logo">
      <a href="index.php"><img src="images/Shayne's Sweet Logo.jpg" alt="logo" height="60" width="60"></a>
    </div>
    <nav class="nav-bar">
      <a href="index.php">Home</a>
      <a href="all_products.php">Our Menu</a>
      <a href="gallery.php">Gallery</a>
      <a href="AboutUs.Html">About Us</a>
      <a href="#">Contact Us</a>
    </nav>
    <div class="icons">
      <a href="cart.php" class="to-edit">
        <img src="images/shopping-cart-icon-.jpg" height="20px" width="20px">
        <sup>
          <?php
            cart_item_no();
          ?>
        </sup>
      </a>
      <?php
        
        if(!isset($_SESSION['username'])){
          echo "<a href='user_registration.php'>Register</a>";
          echo "<a href='login-signup.php'>Login</a>";
        }
        else{
          echo "<a href='profile.php'><img src='images/login-user-icon.png' height='15px' width='15px'></a>";
          echo "<a href='logout.php'>Logout</a>";
        }

      ?>
    </div>
  </header>

  <?php
    cart();
  ?>

  <div class="container">
    <h1>Account</h1><br>

    <?php
    
      // $username = $_SESSION['username'];
      // $profile_image = "select * from user_table where username = '$username'";
      // $ret_image = mysqli_query($con, $profile_image);
      // $image_row = mysqli_fetch_array($ret_image);
      // $user_image = $image_row['user_image'];
      // echo "<img src='images/$user_image' alt=''>";
    
    ?>
  
    <div class="parts">
      <a href="profile.php">Pending Orders</a>
      <a href="profile.php?all_orders">All Orders</a>
      <a href="profile.php?edit_account">Edit Account</a>
      <a href="profile.php?delete_account">Delete Account</a>
    </div><br><br>
    <div class="content">
      <?php
      
        userOrders();

        if(isset($_GET['edit_account'])){
          include('edit_account.php');
        }
        if(isset($_GET['all_orders'])){
          include('user_orders.php');
        }
        if(isset($_GET['delete_account'])){
          include('delete_account.php');
        }
      
      ?>
    </div>
  </div>
</body>
</html>