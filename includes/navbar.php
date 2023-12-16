<?php

include('includes/connect.php');

$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1);

?>

<div class="superNav py-2 bg-light align-items-center shadow-sm">
  <div class="container-fluid px-5">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex d-lg-block d-md-block-d-sm-block text-end">
        <div class="ms-auto d-inline-block mx-2">
          <div class="input-group">
            <input type="text" class="form-control" style="color:#7a7a7a" placeholder="Search">
            <button class="btn btn-dark text-white"><i class="fa-solid fa-magnifying-glass"></i></button>
          </div>
        </div>
        <a class="mx-2 text-uppercase <?= $page == "cart.php" ? 'active':'text-dark'; ?>" href="cart.php"><i class="fa-solid fa-cart-shopping me-2"></i></a>

        <?php
      
          if(isset($_SESSION['auth'])){

            ?>

              <a class="text-dark mx-2 py-2" href="notification.php"><i class="fa-solid fa-bell me-2"></i></a>
              <a class="text-dark mx-2 py-2" href="message.php"><i class="fa-solid fa-message me-2"></i></a>
              <a class="mx-2 text-uppercase <?= $page == "user.php" ? 'active':'text-dark'; ?> py-2" href="user.php"><i class="fa-solid fa-circle-user me-2"></i><?= $_SESSION['auth_user']['username']; ?></a>
              <a class="text-dark mx-2 py-2" href="logout.php"><i class="fa-solid fa-right-from-bracket me-2"></i></a>

            <?php

          }
          else{

            ?>

              <a class="text-uppercase <?= $page == "registration.php" ? 'active':'text-dark'; ?> py-2" href="registration.php"><i class="fa-solid fa-circle-user me-2"></i>Register</a> | 
              <a class="text-uppercase <?= $page == "login.php" ? 'active':'text-dark'; ?> py-2" href="login.php"><i class="fa-solid fa-circle-user me-2"></i>Login</a>

            <?php

          }

        ?>
        
      </div>
    </div>
  </div>
</div>
<nav class="navbar navbar-expand-lg bg-white sticky-top navbar-light shadow-sm">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand mx-2" href="index.php">

      <?php
        
        $logo_name_item = getNavCon("logo_name_tbl");
        if(mysqli_num_rows($logo_name_item)>0){
          $lgnm = mysqli_fetch_array($logo_name_item);
        
        ?>

          <div class="d-inline-flex align-items-center">
            <img src="uploaded_images/<?= $lgnm['web_logo']; ?>" height="60" alt="" class="rounded-circle me-2">
            <?= $lgnm['web_name']; ?>
          </div>

        <?php

        }
        else{
          echo "<h5>No such content.</h5>";
        }

      ?>

    </a>
    <div class=" collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link mx-2 text-uppercase <?= $page == "index.php" ? 'active':''; ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2 text-uppercase <?= $page == "all_products.php" || $page == "products.php" || $page == "product_view.php" ? 'active':''; ?>" href="all_products.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2 text-uppercase <?= $page == "initial_custom.php" ? 'active':''; ?>" href="initial_custom.php">Customize</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2 text-uppercase <?= $page == "about_us.php" ? 'active':''; ?>" href="about_us.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2 text-uppercase <?= $page == "contact.php" ? 'active':''; ?>" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2 text-uppercase <?= $page == "faqs.php" ? 'active':''; ?>" href="faqs.php">FAQs</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php

function getNavCon($table){
  global $conn; // Modify the variable name from $con to $conn
  $all_query = "SELECT * FROM $table";
  return $all_result = mysqli_query($conn, $all_query); // Use $conn here instead of $con
}


?>