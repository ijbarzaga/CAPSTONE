<?php

session_start();
include('../includes/connect.php');

if(isset($_SESSION['auth'])){

  if(isset($_POST['cancel_order'])){
    
    ?>

      <div class="row my-3">
        <input type="button" name="cancel_order" value="Cancel Order" disabled>
        <p class="text-muted">(Cancellation: Pending)</p>
      </div>

    <?php

  }
}

?>