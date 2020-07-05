<?php session_start();
include '../php/koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Simple login form with social login buttons using HTML and CSS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
    body {
      background: #607D8B;
      font-family: arial;
    }

    .login-form h1 {
      font-size: 36px;
      text-align: center;
      color: #45aba6;
      margin-bottom: 30px;
      font-weight: normal;
    }

    .login-form .social-icon {
      width: 100%;
      font-size: 20px;
      padding-top: 20px;
      color: #fff;
      text-align: center;
      float: left;
    }

    .login-form {
      background: #fff;
      width: 450px;
      border-radius: 6px;
      margin: 0 auto;
      display: table;
      padding: 15px 30px 30px;
      box-sizing: border-box;
    }

    .form-group {
      float: left;
      width: 100%;
      margin: 0 0 15px;
      position: relative;
    }

    .login-form input {
      width: 100%;
      padding: 5px;
      height: 56px;
      border-radius: 74px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      font-size: 15px;
      padding-left: 75px;
    }

    .login-form .form-group .input-icon {
      font-size: 15px;
      display: -webkit-box;
      display: -webkit-flex;
      display: -moz-box;
      display: -ms-flexbox;
      display: flex;
      align-items: center;
      position: absolute;
      border-radius: 25px;
      bottom: 0;
      height: 100%;
      padding-left: 35px;
      color: #666;
    }

    .login-form .login-btn {
      background: #45aba6;
      padding: 11px 50px;
      border-color: #45aba6;
      color: #fff;
      text-align: center;
      margin: 0 auto;
      font-size: 20px;
      border: 1px solid #45aba6;
      border-radius: 44px;
      width: 100%;
      height: 56px;
      cursor: pointer;
    }

    .login-form .reset-psw {
      float: left;
      width: 100%;
      text-decoration: none;
      color: #45aba6;
      font-size: 14px;
      text-align: center;
      margin-top: 11px;
    }

    .login-form .social-icon button {
      font-size: 20px;
      color: white;
      height: 50px;
      width: 50px;
      background: #45aba6;
      border-radius: 60%;
      margin: 0px 10px;
      border: none;
      cursor: pointer;
    }

    .login-form button:hover {
      opacity: 0.9;
    }

    .login-form .seperator {
      float: left;
      width: 100%;
      border-top: 1px solid #ccc;
      text-align: center;
      margin: 50px 0 0;
    }

    .login-form .seperator b {
      width: 40px;
      height: 40px;
      font-size: 16px;
      text-align: center;
      line-height: 40px;
      background: #fff;
      display: inline-block;
      border: 1px solid #e0e0e0;
      border-radius: 50%;
      position: relative;
      top: -22px;
      z-index: 1;
    }

    .login-form p {
      float: left;
      width: 100%;
      text-align: center;
      font-size: 16px;
      margin: 0 0 10px;
    }

    @media screen and (max-width:767px) {
      .login-form {
        width: 90%;
        padding: 15px 15px 30px;
      }
    }
  </style>
</head>

<body>
  <div class="login-form">
    <form method="POST">
      <h1>Login Admin</h1>
      <div class="form-group">
        <input type="email" name="email" placeholder="Masukan Email">
        <span class="input-icon"><i class="fa fa-envelope"></i></span>
      </div>
      <div class="form-group">
        <input type="password" name="psw" placeholder="Masukan Password">
        <span class="input-icon"><i class="fa fa-lock"></i></span>
      </div>
      <button class="login-btn" type="submit" name="login">Login</button>
      <!-- <a class="reset-psw" href="#">Forgot your password?</a>
      <div class="seperator"><b>or</b></div> -->
      <!-- <p>Sign in with your social media account</p> -->
      <!-- Social login buttons -->
      <!-- <div class="social-icon">
        <button type="button"><i class="fa fa-twitter"></i></button>
        <button type="button"><i class="fa fa-facebook"></i></button>
      </div> -->
    </form>
    <?php if (isset($_POST['login'])) {
      $email =  htmlspecialchars($_POST['email']);
      $password =  htmlspecialchars($_POST['psw']);

      $login =  mysqli_query($conn, "SELECT * FROM tbl_admin WHERE email_admin='$email' AND password_admin='$password'");
      $data =  $login->num_rows;

      if ($data >= 1) {
        $_SESSION['admin'] = $login->fetch_assoc();
        echo "<script>alert('anda login')</script>";
        echo "<script>location='../index.php'</script>";
      } else {
        echo "<script>alert('username/password salah')</script>";
        // echo "<script>location='login.php'</script>";
      }
    } ?>
  </div>
</body>

</html>