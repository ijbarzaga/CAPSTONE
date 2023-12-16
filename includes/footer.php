  <!-- <div class="p-5 bg-dark text-white mt-auto">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h4 style="text-align: center;">Shayne's <span class="newcol">Sweets</span></h4>
          <a href="index.php" class="text-white"><span class="material-icons-sharp">navigate_next</span>Home</a><br>
          <a href="categories.php" class="text-white"><span class="material-icons-sharp">navigate_next</span>Our Menu</a><br>
          <a href="" class="text-white"><span class="material-icons-sharp">navigate_next</span>Gallery</a><br>
          <a href="" class="text-white"><span class="material-icons-sharp">navigate_next</span>About Us</a><br>
          <a href="" class="text-white"><span class="material-icons-sharp">navigate_next</span>Contact Us</a><br>
        </div>
      </div>
    </div>
  </div> -->

  <footer class="bg-dark text-center text-lg-start text-white mt-auto">
    <!-- Grid container -->
    <div class="container p-4">
      <!--Grid row-->
      <div class="row my-4">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">

          <div class="rounded-circle bg-black shadow-1-strong d-flex align-items-center justify-content-center mb-4 mx-auto" style="width: 100px; height: 100px;">
            <img src="images/Shaynes-Sweet-Logo.jpg" class="rounded-circle" height="90" alt="" loading="lazy" />
          </div>

          <p class="text-center">Shayne's Sweets</p>

          <ul class="list-unstyled d-flex flex-row justify-content-center">
            <li>
              <a class="text-white px-2" href="https://www.facebook.com/shaynessweets">
                <i class="fab fa-facebook-square"></i>
              </a>
            </li>
            <li>
              <a class="text-white px-2" href="https://www.instagram.com/shaynessweets/">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li>
              <a class="text-white ps-2" href="https://www.tiktok.com/tag/shaynessweets">
                <i class="fab fa-tiktok"></i>
              </a>
            </li>
          </ul>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Shayne's Sweets</h5>

          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="index.php" class="text-white"><i class="fas fa-link pe-3"></i>Home</a>
            </li>
            <li class="mb-2">
              <a href="all_products.php" class="text-white"><i class="fas fa-link pe-3"></i>Our Menu</a>
            </li>
            <li class="mb-2">
              <a href="gallery.php" class="text-white"><i class="fas fa-link pe-3"></i>Gallery</a>
            </li>
            <li class="mb-2">
              <a href="user.php" class="text-white"><i class="fas fa-link pe-3"></i>Account</a>
            </li>
            <li class="mb-2">
              <a href="user_orders.php" class="text-white"><i class="fas fa-link pe-3"></i>Orders</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Information</h5>

          <ul class="list-unstyled">
            <li class="mb-2">
              <a href="about_us.php" class="text-white"><i class="fas fa-link pe-3"></i>About Us</a>
            </li>
            <li class="mb-2">
              <a href="contact.php" class="text-white"><i class="fas fa-link pe-3"></i>Contact Us</a>
            </li>
            <li class="mb-2">
              <a href="faqs.php" class="text-white"><i class="fas fa-link pe-3"></i>Terms of Use</a>
            </li>
            <!-- <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-link pe-3"></i></a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-link pe-3"></i>Tenders</a>
            </li>
            <li class="mb-2">
              <a href="#!" class="text-white"><i class="fas fa-link pe-3"></i>Contact</a>
            </li> -->
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Contact</h5>

          <ul class="list-unstyled">
            <li>
              <p><i class="fas fa-map-marker-alt pe-2"></i>Block 45 Lot 15 Barangay Narra, 3, Silang, 4118 Cavite</p><br></br>
            </li>
            <li>
              <p><i class="fas fa-phone pe-2"></i>0995 921 9705</p><br></br>
            </li>
            <li>
              <p><i class="fas fa-envelope pe-2 mb-0"></i>shaynessweets@gmail.com</p>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
    <!-- Grid container -->
  </footer>
  
  <script src="assets/js/jquery-3.7.0.min.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/custom_js.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

 <script>
    $(document).ready(function () {
        <?php
        if(isset($_SESSION['message'])){
        ?>
            alertify.set('notifier','position', 'top-right');
            <?php
            if ($_SESSION['messageType'] === 'success') {
            ?>
                alertify.success('<?= $_SESSION['message']; ?>');
            <?php
            } elseif ($_SESSION['messageType'] === 'warning') {
            ?>
                alertify.warning('<?= $_SESSION['message']; ?>');
            <?php
            } elseif ($_SESSION['messageType'] === 'error') {
            ?>
                alertify.error('<?= $_SESSION['message']; ?>');
            <?php
            }
            ?>
            <?php
            unset($_SESSION['message']);
            unset($_SESSION['messageType']);
        }
        ?>
    });
</script>
  </script>

  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

  <script>
    $(document).ready( function () {
      $('#datatable').DataTable();
    });
    $(document).ready( function () {
      $('#datatable2').DataTable();
    });
  </script>
</body> 
</html> 