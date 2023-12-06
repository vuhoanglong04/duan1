<?php
ob_start();
session_start();

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
  <style>
    body {
      background-image: url('https://images.unsplash.com/photo-1580196969807-cc6de06c05be?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjR8fGZvb2QlMjBpbGx1c3RyYXRpb258ZW58MHx8MHx8fDA%3D');
      /* background-size: cover;
        background-repeat: ; */
      height: 100vh;
    }

    .authfy-login {
      height: 600px;
      border-radius: 15px;

    }

    .plank {
      font-weight: 900;
      font-size: 25px;
    }
  </style>
  <!-- Start Preloader -->
  <div id="preload-block">
    <div class="square-block"></div>
  </div>
  <!-- Preloader End -->
  <?php
  include('model/pdo.php');
  include('model/user.php');
  include('mail/mail.php');
  include('model/validate.php');

  $mail = new Mailer();
  $error_email = "";
  if (isset($_POST['forgot'])) {

    $email = $_POST['email'];
    $username = $_POST['username'];
    $error_email = check($email);
    if (count(check_user($email, $username)) > 0) {
      if ($error_email == "") {
        $date = date('Y-m-d H:i:s');
        $code = substr(rand(0, 999999), 0, 6);
        $tittle = "Reset Password";
        $content  = "
              <span class='preheader'>Use this link to reset your password. The link is only valid for 24 hours.</span>
              <table class='email-wrapper' width='100%' cellpadding='0' cellspacing='0' role='presentation'>
              <tr>
                <td align='center'>
                  <table class='email-content' width='100%' cellpadding='0' cellspacing='0' role='presentation'>
                    <tr>
                
                    </tr>
                    <!-- Email Body -->
                    <tr>
                      <td class='email-body' width='570' cellpadding='0' cellspacing='0'>
                        <table class='email-body_inner' align='center' width='570' cellpadding='0' cellspacing='0' role='presentation'>
                          <!-- Body content -->
                          <tr>
                            <td class='content-cell'>
                              <div class='f-fallback'>
                                <h1>Hi,</h1>
                                <p>You recently requested to reset your password for your  account. Use the code below to reset it. <strong>This password reset is only valid for the next 5 minutes.</strong></p>
                                <!-- Action -->
                                <table class='body-action' align='center' width='100%' cellpadding='0' cellspacing='0' role='presentation'>
                                  <tr>
                                    <td align='center'>
                                      <!-- Border based button
                   https://litmus.com/blog/a-guide-to-bulletproof-buttons-in-email-design -->
                                      <table width='100%' border='0' cellspacing='0' cellpadding='0' role='presentation'>
                                        <tr>
                                          <td align='center'>
                                            <p href='' class='plank' style='font-weight:900;font-size:25px;'>" . $code . "</p>
                                          </td>
                                        </tr>
                                      </table>
                                    </td>
                                  </tr>
                                </table>
                      
                                <p>Thanks,
                                  <br>The Frutin team</p>
                                <!-- Sub copy -->
                                <table class='body-sub' role='presentation'>
                                  <tr>
                                    <td>
                                      <p class='f-fallback sub'>If you’re having trouble with the code above, please try send code a gain.</p>
                                      
                                    </td>
                                  </tr>
                                </table>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <table class='email-footer' align='center' width='570' cellpadding='0' cellspacing='0' role='presentation'>
                          <tr>
                            <td class='content-cell' align='center'>
                              <p class='f-fallback sub align-center'>
                               Frutin-" . $date . "
                              </p>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>";
        $currentTimestamp = time();

        // Thêm 5 phút vào thời điểm hiện tại
        $newTimestamp = strtotime('+5 minutes', $currentTimestamp);

        // Chuyển đổi timestamp thành định dạng ngày giờ
        $newDateTime = date('Y-m-d H:i:s', $newTimestamp);
        $new_array =    array(
          'email' => $email,
          'username' => $username,
          'code' => $code,
          'date' =>  $newDateTime,
        );
        $_SESSION['code'] = [];
        $_SESSION['code'] = $new_array;

        $mail->sendMail($tittle, $content, $email);
        header("Location: resetPass.php");
      }
    } else echo "<script>alert('Username and email are not exist')</script>";
  }

  ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-8 col-lg-offset-4 col-md-offset-3 col-sm-offset-2">
        <!-- brand-logo start -->

        <!-- authfy-login start -->
        <div class="authfy-login " style=" box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
          <!-- panel-login start -->

          <div class="authfy-panel panel-forgot active">
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <div class="authfy-heading">
                  <h3 class="auth-title">Recover your password</h3>
                  <p>Fill in your e-mail address below and we will send you an email with further instructions.</p>
                </div>
                <form name="forgetForm" class="forgetForm" method="POST">

                  <div class="form-group">
                    <label for="">Email Address</label>
                    <input type="text" class="form-control" name="email" placeholder="Email Address">
                    <p style="color:red; text-align: left;"><?= $error_email ?></p>
                  </div>
                  <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Email Address">

                  </div>
                  <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block" name="forgot" type="submit" style="background-color:#017d03;color:white;font-weight:600">Recover your password</button>
                  </div>
                  <div class="form-group">
                    <a href="login.php">Already have an account?</a>
                  </div>
                  <div class="form-group">
                    <a href="signup.php">Don’t have an account?</a>
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