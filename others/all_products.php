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

  <div class="category-sec">
    <div class="title">
      <h1>Our Products</h1>
    </div>
    <!-- <div class="menu">
      <a href="#"><img src="images/1.png" height="50" width="50"></a>
      <a href="#"><img src="images/2.png" height="50" width="50"></a>
      <a href="#"><img src="images/3.png" height="50" width="50"></a>
      <a href="#"><img src="images/4.png" height="40" width="40"></a>
      <a href="#"><img src="images/5.png" height="50" width="50"></a>
      <a href="#"><img src="images/6.png" height="50" width="50"></a>
      <a href="#"><img src="images/7.png" height="50" width="50"></a>
    </div> -->
  </div>
    
  <div class="all-products">
    <div class="category-disp">
      <h2>
        Categories
      </h2>
      <ul class="categ">
        <?php 
          getCategories();
        ?>
      </ul>
    </div>
    <div class="product-disp">
      <div class="search-part">
        <form class="srch" method="get">
          <input type="search" placeholder="Search..." name="search_product">
          <input type="submit" value="Search" name="btn_search">
        </form>
      </div>
      <div class="product-list">
          
        <?php
          getProducts();
          getUniqueCategories();
          
        ?>
      </div>
    </div>
  </div>
</body>
</html>