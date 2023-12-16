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
      margin-right: 0.5rem;
    }

    .row{
      display: flex;
      align-items: center;
      justify-content: center;
      max-height: 100%;
      gap: 5rem;
    }
    .col-1{
      margin-top: 50px;
      margin-left: 5rem;
    }
    .Preview {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .col-2{
      flex-basis: 40%;
      position: relative;
      margin-top: 100px;
      font-size: 20px;
    }
    .col-2 h2{
      color: deeppink;
    }
    .col-2 h3{
      margin-top: 3rem;
    }
    .option select {
      width: 200px;
      height: 30px;
      margin-bottom: 2rem;
    }
    .form-control {
      line-height: 2;
    }
    h5{
      margin-top: 1rem;
    }
    form input {
      width: 70px;
      height: 30px;
    }
    .button a{
      height:40px;
      width: 300px;
      display:flex;
      align-items: center;
      text-align: center;
      text-decoration: none;
      background-color: deeppink;
      margin-top: 1rem;
      color: white;
    }

    .product-list{
      margin-top: 3rem;
    }
    .product-list .sim-title{
      text-align: center;
      font-size: 1.5rem;
    }
    .product-list .similar{
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 2rem;
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
  <div class="row">
    <?php
      viewItem();
    ?>
  </div>
  
  <div class="product-list">
    <div class="sim-title">
      <h3>Other Products</h3>
    </div>
    <div class="similar">
      <?php
        getProducts();
        getUniqueCategories();
      ?>
    </div>
    
  </div>

</body>

</html>