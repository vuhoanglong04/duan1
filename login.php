<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
  <!-- Basic Page Needs
  ================================================== -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Mobile Specific Metas
  ================================================== -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- For Search Engine Meta Data  -->
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="yoursite.com" />

  <title>Login</title>

  <link rel="shortcut icon" type="image/icon" href="assets/img/favicon-16x16.html" />
  <link rel="stylesheet" href="assets/css/login1-style.css">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">

  <link rel="stylesheet" href="assets/css/preloader.css">

  <script src="https://kit.fontawesome.com/dc265cc9f9.js" crossorigin="anonymous"></script>
</head>

<body>

  <!-- Start Preloader -->
  <div id="preload-block">
    <div class="square-block"></div>
  </div>
  <!-- Preloader End -->

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-8 col-lg-offset-4 col-md-offset-3 col-sm-offset-2">
        <!-- brand-logo start -->
        <div class="brand-logo text-center">
          <a href="index.php?act="><img src="assets/img/logo.svg" width="120" alt="brand-logo"></a>
        </div><!-- ./brand-logo -->
        <!-- authfy-login start -->
        <div class="authfy-login">
          <!-- panel-login start -->
          <div class="authfy-panel panel-login text-center active">
            <div class="authfy-heading">
              <h3 class="auth-title">Login to your account</h3>
              <p>Don’t have an account? <a class="lnk-toggler" data-panel=".panel-signup" href="#">Sign Up Free!</a></p>
            </div>
            <!-- social login buttons start -->
            <div class="row social-buttons">
              <div class="col-xs-4 col-sm-4">
                <a href="#" class="btn btn-lg btn-block btn-facebook">
                  <i class="fa fa-facebook"></i>
                </a>
              </div>
              <div class="col-xs-4 col-sm-4">
                <a href="#" class="btn btn-lg btn-block btn-twitter">
                  <i class="fa fa-twitter"></i>
                </a>
              </div>
              <div class="col-xs-4 col-sm-4">
                <a href="#" class="btn btn-lg btn-block btn-google">
                  <i class="fa fa-google-plus"></i>
                </a>
              </div>
            </div>



            <!-- ./social-buttons -->
            <div class="row loginOr">
              <div class="col-xs-12 col-sm-12">
                <hr class="hrOr">
                <span class="spanOr">or</span>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <form name="loginForm" class="loginForm" action="login.php" method="POST">
                  <input type="text" class="form-control" name="username_signin" placeholder="Username">
                  <div class="pwdMask">
                    <input type="password" class="form-control password" name="password_signin" placeholder="Password">
                    <span class="fa fa-eye-slash pwd-toggle"></span>
                  </div>
                  <div class="row remember-row">
                    <div class="col-xs-6 col-sm-6">
                      <label class="checkbox text-left">
                        <input type="checkbox" value="remember-me" name="remember"><span class="label-text">Remember me</span>
                      </label>
                    </div>
                    <div class="col-xs-6 col-sm-6">
                      <p class="forgotPwd">
                        <a class="lnk-toggler" data-panel=".panel-forgot" href="#">Forgot password?</a>
                      </p>
                    </div>
                  </div> <!-- ./remember-row -->
                  <div class="form-group">
                    <button class="btn btn-lg btn-block login" style="background-color:#017d03;color:white;font-weight:600" name="login" type="submit">Login</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- ./panel-login -->



          <!-- panel-signup start -->
          <div class="authfy-panel panel-signup text-center">
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <div class="authfy-heading">
                  <h3 class="auth-title">Sign up for free!</h3>
                </div>
                <form name="signupForm" class="signupForm" method="POST">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email_signup" placeholder="Email address">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="username_signup" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <div class="pwdMask">
                      <input type="password" class="form-control" name="password_signup" placeholder="Password">
                      <span class="fa fa-eye-slash pwd-toggle"></span>
                    </div>
                  </div>

                  <div class="form-group">
                    <p class="term-policy text-muted small">I agree to the <a href="#">privacy policy</a> and <a href="#">terms of service</a>.</p>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block" name="signup" style="background-color:#017d03;color:white;font-weight:600" id="signup" type="submit">Sign up with
                      email</button>
                  </div>
                </form>
                <a class="lnk-toggler" data-panel=".panel-login" href="#">Already have an account?</a>
              </div>
            </div>
          </div>
          <!-- ./panel-signup -->






          <!-- panel-forget start -->
          <div class="authfy-panel panel-forgot">
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <div class="authfy-heading">
                  <h3 class="auth-title">Recover your password</h3>
                  <p>Fill in your e-mail address below and we will send you an email with further instructions.</p>
                </div>
                <form name="forgetForm" class="forgetForm" action="login.php" method="POST">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email_forgot" placeholder="Email address">
                  </div>
                  <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block" name="forgot" type="submit" style="background-color:#017d03;color:white;font-weight:600">Recover your password</button>
                  </div>
                  <div class="form-group">
                    <a class="lnk-toggler" data-panel=".panel-login" href="#">Already have an account?</a>
                  </div>
                  <div class="form-group">
                    <a class="lnk-toggler" data-panel=".panel-signup" href="#">Don’t have an account?</a>
                  </div>
                </form>
              </div>
            </div>
          </div> <!-- ./panel-forgot -->
        </div> <!-- ./authfy-login -->
      </div>
    </div> <!-- ./row -->
  </div> <!-- ./container -->

  <!-- PHP -->
  <?php
  include('model/pdo.php');
  include('model/user.php');
  //Sign Up
  if (isset($_POST['signup'])) {
    $email = trim($_POST['email_signup']);
    $username = trim($_POST['username_signup']);
    $password = trim($_POST['password_signup']);
    if (count(user_exis($username)) == 0) {
      sign_up($email, $username, $password);
    } else {
      echo '<script>alert("Username is already used")</script>';
    }
  }
  // Sign In
  if (isset($_POST['login'])) {
    $username = $_POST['username_signin'];
    $password = $_POST['password_signin'];
    $result = sign_in($username, $password);
    if (count($result) > 0) {
      if (isset($_POST['remember'])) {
        setcookie('username', $username, time() + 84600);
        setcookie('password', $password, time() + 84600);
      } else {
        setcookie('username', $username, time() + 10);
        setcookie('password', $password, time() + 10);
      }
      header("Location: index.php?act=");
    } else {
      echo "<script>alert('Username or password is not correct')</script>";
    }
  }
  ?>

  <!-- Javascript Files -->
  <!-- initialize jQuery Library -->
  <script src="assets/js/jquery-2.2.4.min.js"></script>

  <!-- for Bootstrap js -->
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Custom js-->
  <script src="assets/js/custom.js"></script>

</body>

<!-- Mirrored from themeknit.com/demo/html/authfy/demo/login-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Nov 2023 11:16:13 GMT -->

</html>