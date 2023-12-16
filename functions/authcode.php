<?php

include('com_functions.php');

session_start();

include('../includes/connect.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

function sendemail_verify($username,$email,$verify_token){
  $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->CharSet = "utf-8";
  $mail->SMTPAuth = true;
  $mail->Host = "smtp.gmail.com";
  $mail->Username = "trialemail790@gmail.com";
  $mail->Password = "ziehvwskfprumowc";
  $mail->SMTPSecure = "tls";
  $mail->Port = 587;
  // $mail->SMTPOptions = array(
  //   'ssl' => array(
  //       'verify_peer' => false,
  //       'verify_peer_name' => false,
  //       'allow_self_signed' => true
  //   )
  // );
  
  $mail->setFrom("trialemail790@gmail.com", $username);
  $mail->addAddress($email);

  $mail->isHTML(true);
  $mail->Subject = "Email Verification";

  $email_template = "<h2>You have registered.</h2>
                    <h5>Verify your email to login using the given link.</h5>
                    <br>
                    <a href='http://shaynessweets.store/verify-email.php?token=$verify_token'>Verify</a>";
  
  $mail->Body = $email_template;
  $mail->send();
}

if(isset($_POST['regbtn'])){
  $uname = mysqli_real_escape_string($con, $_POST['username']);
  $emailad = mysqli_real_escape_string($con, $_POST['email_address']);
  $contactno = mysqli_real_escape_string($con, $_POST['contact_number']);
  $pass = mysqli_real_escape_string($con, $_POST['password']);
  $conpass = mysqli_real_escape_string($con, $_POST['conpass']);
  $verify_token = md5(rand());

  $check_query = "SELECT username, email_address FROM users_tbl WHERE username = '$uname' OR email_address = '$emailad' LIMIT 1";
  $check_result = mysqli_query($con, $check_query);
  if(mysqli_num_rows($check_result)>0){
    $_SESSION['message'] = "Username or Email already registered.";
    header('Location: ../registration.php');
  }
  else{
    if($pass == $conpass){
      $hashed_pass = password_hash($pass, PASSWORD_DEFAULT);
      $user_insert = "INSERT INTO users_tbl (username, email_address, contact_number, password, verify_token) 
                      VALUES ('$uname','$emailad','$contactno','$hashed_pass', '$verify_token')";
      $insert_result = mysqli_query($con, $user_insert);
      if($insert_result){
        sendemail_verify("$uname","$emailad","$verify_token");
        redirect("../login.php", "Registered Successfully. Please verify your email.");
      }
      else{
        redirect("../registration.php", "Registration Failed.");
      }
    }
    else{
      redirect("../registration.php", "Password do not match.");
    }
  }
}

else if (isset($_POST['logbtn'])) {
  $emailad = mysqli_real_escape_string($con, $_POST['email_address']);
  $pass = mysqli_real_escape_string($con, $_POST['password']);

  $login_query = "SELECT * FROM users_tbl WHERE email_address = '$emailad' LIMIT 1";
  $login_result = mysqli_query($con, $login_query);

  if ($login_result) {
    $userinfo = mysqli_fetch_array($login_result);
    if ($userinfo && password_verify($pass, $userinfo['password'])) {
      if($userinfo['verify_status'] == 1){
        $_SESSION['auth'] = true;
        $userid = $userinfo['user_id'];
        $username = $userinfo['username'];
        $useremail = $userinfo['email_address'];
        $usercontact = $userinfo['contact_number'];
        $role = $userinfo['role'];
        
        $_SESSION['auth_user'] = [
            'user_id' => $userid,
            'username' => $username,
            'email_address' => $useremail,
            'contact_number' => $usercontact,
            'role' => $role
        ];

        $_SESSION['role'] = $role;

        if ($role == 1) {
          redirect("../admin/index.php", "Welcome Admin.");
        } 
        else {
          redirect("../index.php", "Logged In Successfully.");
        }
      }
      else{
        redirect("../login.php", "Email not verified.");
      }
    } 
    else {
      redirect("../login.php", "Login failed. Incorrect password.");
    }
  } 
  else {
    redirect("../login.php", "Login failed. Invalid credentials.");
  }
}

// else if(isset($_POST['logbtn'])){
//   $emailad = mysqli_real_escape_string($con, $_POST['email_address']);
//   $pass = mysqli_real_escape_string($con, $_POST['password']);

//   $login_query = "SELECT * FROM users_tbl WHERE email_address = '$emailad' AND password = '$pass'";
//   $login_result = mysqli_query($con, $login_query);

//   if(mysqli_num_rows($login_result)>0){
//     $_SESSION['auth'] = true;

//     $userinfo = mysqli_fetch_array($login_result);
//     $userid = $userinfo['user_id'];
//     $username = $userinfo['username'];
//     $useremail = $userinfo['email_address'];
//     $role = $userinfo['role'];
//     $_SESSION['auth_user'] = [
//       'user_id' => $userid,
//       'username' => $username,
//       'email_address' => $useremail
//     ];

//     $_SESSION['role'] = $role;
//     if(password_verify($pass, $userinfo['password'])){
//       if($role == 1){
//         redirect("../admin/index.php", "Welcome Admin.");
//       }
//       else{
//         redirect("../index.php", "Logged In Successfully.");
//       }
//     }
//     else{
//       redirect("../login.php", "Login failed. Incorrect password.");
//     }
//   }
//   else{
//     redirect("../login.php", "Invalid Credentials.");
//   }
// }

?>