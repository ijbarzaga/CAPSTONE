<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shayne's Sweets</title>
</head>
<body>

  <?php
  
    $user_session = $_SESSION['username'];
    $get_user = "select * from user_table where username = '$user_session'";
    $user_result = mysqli_query($con, $get_user);
    $user_row = mysqli_fetch_assoc($user_result);
    $user_id = $user_row['user_id'];

  ?>

  <div class="container">
    <h1>All Orders</h1>
    <div class="content">
      <table style="width: 100%;">
        <thead>
          <tr>
            <th>Serial No.</th>
            <th>Amount Due</th>
            <th>Total Products</th>
            <th>Invoice No.</th>
            <th>Date</th>
            <th>Status</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody style="text-align: center;">

          <?php
          
            $get_orders = "select * from user_orders where user_id = $user_id";
            $orders_result = mysqli_query($con, $get_orders);
            $number = 1;
            while($order_row=mysqli_fetch_assoc($orders_result)){
              $order_id = $order_row['order_id'];
              $order_amount = $order_row['order_amount'];
              $invoice_number = $order_row['invoice_number'];
              $total_products = $order_row['total_products'];
              $order_date = $order_row['order_date'];
              $order_status = $order_row['order_status'];
              if($order_status=='pending'){
                $order_status = 'Incomplete';
              }
              else{
                $order_status = 'Complete';
              }
              echo "<tr>
                      <td>$number</td>
                      <td>$order_amount</td>
                      <td>$total_products</td>
                      <td>$invoice_number</td>
                      <td>$order_date</td>
                      <td>$order_status</td>"; ?>

                      <?php
                        if($order_status=='Complete'){
                          echo "<td>Paid</td>";
                        }else{
                          echo "<td><a href='confirm_payment.php?order_id=$order_id'>Confirm</a></td>
                          </tr>";
                        }
              $number++;
            } ?>
          
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>