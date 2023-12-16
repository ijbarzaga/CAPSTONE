<?php

include('includes/connect.php');

$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1);

?>

<nav class="navbar navbar-expand-lg bg-light sticky-top py-3">
  <div class="pe-lg-0 ps-lg-5 container-fluid justify-content-between">
    <a class="navbar-brand" href="index.php">
      <?php
        
        $logo_name_item = getNavCon("logo_name_tbl");
        if(mysqli_num_rows($logo_name_item)>0){
          $lgnm = mysqli_fetch_array($logo_name_item);
        
        ?>

          <div class="d-inline-flex align-items-center">
            <img src="uploaded_images/<?= $lgnm['web_logo']; ?>" height="60" alt="" class="rounded-circle">
            <?= $lgnm['web_name']; ?>
          </div>

        <?php

        }
        else{
          echo "<h5>No such content.</h5>";
        }
      
      ?>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <div class="nav_left d-lg-flex align-items-center">
          <nav>
            <div class="nav d-block d-sm-flex nav-tabs" id="nav-tab" role="tablist">
              <button class="nav-link <?= $page == "index.php" ? 'active':''; ?>" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                  type="button" role="tab" aria-controls="home" aria-selected="true"><a href="index.php" style="color:white;">Home</a></button>
              <button class="nav-link <?= $page == "categories.php" || $page == "products.php" ? 'active':''; ?>" id="about-tab" data-bs-toggle="tab" data-bs-target="#about"
                  type="button" role="tab" aria-controls="about" aria-selected="false"><a href="categories.php" style="color:white;">Our Menu</a></button>
              <button class="nav-link <?= $page == "gallery.php" ? 'active':''; ?>" id="timing-tab" data-bs-toggle="tab" data-bs-target="#timing"
                  type="button" role="tab" aria-controls="timing" aria-selected="false"><a href="gallery.php" style="color:white;">Gallery</a></button>
              <button class="nav-link <?= $page == "about_us.php" ? 'active':''; ?>" id="courses-tab" data-bs-toggle="tab" data-bs-target="#courses"
                  type="button" role="tab" aria-controls="courses" aria-selected="false"><a href="about_us.php" style="color:white;">About Us</a></button>
              <button class="nav-link <?= $page == "cart.php" ? 'active':''; ?>" id="courses-tab" data-bs-toggle="tab" data-bs-target="#courses"
                  type="button" role="tab" aria-controls="courses" aria-selected="false">
                  <a href="cart.php" style="color:white;">
                    <i class="fa-solid fa-cart-shopping d-flex">
                      <div class="red-dot px-1" style="background:red;border-radius: 10px;">
                        1
                      </div>
                    </i>
                  </a>
              </button>
              
              <?php
    
              if(isset($_SESSION['auth'])){
                ?>
                  <button class="nav-link " id="courses-tab" data-bs-toggle="tab" data-bs-target="#courses"
                      type="button" role="tab" aria-controls="courses" aria-selected="false"><i class="fa-solid fa-bell"></i></button>
                  <button class="nav-link" id="courses-tab" data-bs-toggle="tab" data-bs-target="#courses"
                      type="button" role="tab" aria-controls="courses" aria-selected="false"><a href="logout.php" style="color:white;"><i class="fa-solid fa-comments"></i></a></button>
                  <button class="nav-link <?= $page == "user.php" ? 'active':''; ?>" id="courses-tab" data-bs-toggle="tab" data-bs-target="#courses"
                      type="button" role="tab" aria-controls="courses" aria-selected="false"><a href="user.php" style="color:white;"><i class="fa fa-circle-user"> <?= $_SESSION['auth_user']['username']; ?></i></a></button>
                  <button class="nav-link" id="courses-tab" data-bs-toggle="tab" data-bs-target="#courses"
                      type="button" role="tab" aria-controls="courses" aria-selected="false"><a href="logout.php" style="color:white;"><i class="fa-solid fa-right-from-bracket"></i></a></button>
                <?php
              }
              else{
                ?>
                <button class="nav-link <?= $page == "registration.php" ? 'active':''; ?>" id="courses-tab" data-bs-toggle="tab" data-bs-target="#courses"
                    type="button" role="tab" aria-controls="courses" aria-selected="false"><a href="registration.php" style="color:white;">Register</i></a></button>
                <button class="nav-link <?= $page == "login.php" ? 'active':''; ?>" id="courses-tab" data-bs-toggle="tab" data-bs-target="#courses"
                    type="button" role="tab" aria-controls="courses" aria-selected="false"><a href="login.php" style="color:white;">Login</a></button>
                <?php
              }
              ?> 

            </div>
          </nav>
          <div class="position-relative d-inline-block me-lg-4">
            <input class="search_input ms-5 mb-3 mb-lg-0 ms-lg-0 pe-5 ps-3" type="search" placeholder="Search" aria-label="Search">
            <i class="fa fa-magnifying-glass position-absolute search_img"></i>
          </div>
      </div>
    </div>
  </div>
</nav>

<?php

function getNavCon($table){
  global $con;
  $all_query = "SELECT * FROM $table";
  return $all_result = mysqli_query($con, $all_query);
}

?>