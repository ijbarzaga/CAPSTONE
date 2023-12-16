<?php

include('includes/connect.php');

$page = substr($_SERVER['SCRIPT_NAME'], strrpos($_SERVER['SCRIPT_NAME'],"/")+1);

?>

<div class="col-lg-3">
  <div class="card mb-4">
    <div class="card-body text-center">
      <?php
      
      if(isset($_SESSION['auth'])){



        ?>

          <img src="images/login-user-icon.png" alt="" class="rounded-circle img-fluid" style="width: 150px; background:black;">
          <h5 class="my-3"><?= $_SESSION['auth_user']['username']; ?></h5>

        <?php


      }

      ?>
    </div>
  </div>
  <div class="card mb-4 mb-lg-0">
    <div class="card-body p-0">
      <ul class="list-group list-group-flush rounded-3">
        <li class="list-group-item d-flex align-items-center p-3">
          <a href="user.php" class="btn btn-primary mx-auto active">
            Account
          </a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
          <a href="user_orders.php?pending" class="btn mx-auto">
            Orders
          </a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
          <a href="" class="btn mx-auto">
            Link
          </a>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center p-3">
          <a href="" class="btn mx-auto">
            Link
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>