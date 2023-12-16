<?php
include('../functions/com_functions.php');

if(isset($_SESSION['auth'])){
  if($_SESSION['role'] != 1){
    redirect("../index.php", "No authorization.");
  }
}
else{
  redirect("../login.php", "Login to continue.");
}

?>