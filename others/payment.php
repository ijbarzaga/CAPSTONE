<?php 
  include('includes/connect.php');
  include('functions/common_function.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shayne's Sweets</title>
</head>
<body>

  <?php
  
    $user_ip = getIPAddress();
    $get_user = "select * from user_table where user_ip = '$user_ip'";
    $result_user = mysqli_query($con, $get_user);
    $run_query = mysqli_fetch_array($result_user);
    $user_id = $run_query['user_id'];

  ?>

  <div class="container">
    <h2>Payment Options</h2>

    <a href="https://www.gcash.com/">GCash</a><br><br>

    <a href="order.php?user_id=<?php echo $user_id; ?>">Cash-on-Delivery</a>
  </div>
</body>
</html>