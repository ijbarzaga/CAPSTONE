<?php 
  include('includes/connect.php');
  include('functions/common_function.php');

  session_start();

  if(isset($_GET['order_id'])){
    $order_id = $_GET['order_id'];

    $order_select = "select * from user_orders where order_id = $order_id";
    $order_result = mysqli_query($con, $order_select);
    $order_row = mysqli_fetch_assoc($order_result);
    $invoice_number = $order_row['invoice_number'];
    $order_amount = $order_row['order_amount'];
  }

  if(isset($_POST['confirm_payment'])){
    $invoice_number = $_POST['invoice_number'];
    $total_amount = $_POST['total_amount'];
    $payment_option = $_POST['payment_mode'];
    $payment_insert = "insert into user_payments (order_id, invoice_number, order_amount, payment_mode)
                      values ($order_id,$invoice_number,$total_amount,'$payment_option')";
    $payment_result = mysqli_query($con, $payment_insert);
    if($payment_result){
      echo "<h3>Payment Successful.</h3>";
      echo "<script>window.open('profile.php?all_orders','_self')</script>";
    }
    $update_orders = "update user_orders set order_status = 'Complete' where order_id = $order_id";
    $update_result = mysqli_query($con, $update_orders);
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shayne's Sweets</title>
</head>
<body>
  <div class="container">
    <h1>Payment Confirmation</h1>
    <form action="" method="post">
      <div class="input_box">
        <span>Invoice Number</span>
        <input type="number" class="input" readonly autocomplete="off" required value="<?php echo $invoice_number; ?>" name="invoice_number">
      </div>
      <div class="input_box">
        <span>Total Amount</span>
        <input type="number" class="input" readonly autocomplete="off" required value="<?php echo $order_amount; ?>" name="total_amount">
      </div>
      <div class="input_box">
        <span>Payment Options</span>
        <select name="payment_mode" id="">
          <option>Select Payment Mode</option>
          <option value="GCash">GCash</option>
          <option value="COD">Cash-on-Delivery</option>
        </select>
      </div>
      <input type="submit" value="Confirm" class="btn" name="confirm_payment">
    </form>
  </div>
</body>
</html>