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

    .category-sec .title h1{
      text-align: center;
      font-size: 2.5rem;
      padding: 2rem;
    }
    .menu {
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: relative;
      padding: 1rem 15%;
    }
    .menu a:hover {
      border-bottom: .1rem solid deeppink;
      padding-bottom: .4rem;
    }

    .all-products{
      display: grid;
      grid-template-columns: 15rem auto;
      width: 96%;
      margin: 1rem auto;
      gap: 1.6rem;
    }
    .all-products .category-disp{
      padding: 1.5rem;
    }
    .all-products .category-disp h2{
      font-size: 1.5rem;
      padding: 1rem;
      text-align: center;
      border-bottom: 1px solid lightgray;
    }
    .all-products .category-disp .categ{
      list-style-type: none;
      padding: 0.8rem;
    }
    .all-products .category-disp .categ .categs{
      text-align: center;
      margin-bottom: 1rem;
    }
    .all-products .category-disp .categ .categs a{
      text-decoration: none;
      font-size: 1.2rem;
    }
    .product-list{
      display: flex;
      align-items: center;
      justify-content: space-between;
      position: relative;
      padding: 1rem 15%;
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
      <a href="Gallery.Html">Gallery</a>
      <a href="AboutUs.Html">About Us</a>
      <a href="#">Contact Us</a>
    </nav>
    <div class="icons">

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

  <div class="container">
    <div class="options-part">
      <?php 
        if(!isset($_SESSION['username'])){
          echo "<script>window.open('login-signup.php','_self')</script>";
        }
        else{
          echo "<script>window.open('payment.php','_self')</script>";
        }
      ?>
    </div>
  </div>
</body>
</html>

