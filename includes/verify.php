<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../assets/css/verify.css">
</head>
<body>
  <div class="form">
    <h3>Verify Your Account</h3>
    <p>We send a four digit OTP code on your email.</p>
    <form action="" autocomplete="off">
      <div class="fields-input">
        <input type="number" name="otp1" class="otp-field" required min="0" max="9" onpaste="false">
        <input type="number" name="otp2" class="otp-field" required min="0" max="9" onpaste="false">
        <input type="number" name="otp3" class="otp-field" required min="0" max="9" onpaste="false">
        <input type="number" name="otp4" class="otp-field" required min="0" max="9" onpaste="false">
      </div>
      <div class="submit">
        <input type="submit" value="Verify" class="button">
      </div>
    </form>
  </div>
</body>
</html>