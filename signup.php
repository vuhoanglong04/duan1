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
    </style>
    <!-- Start Preloader -->
    <div id="preload-block">
        <div class="square-block"></div>
    </div>
    <!-- Preloader End -->
    <?php
    include('model/pdo.php');
    include('model/user.php');
    include('model/validate.php');
 
    //Sign Up
    $error_email = "";
    $error_password = "";
    $error_username = "";
    if (isset($_POST['signup'])) {
        $email = trim($_POST['email_signup']);
        $username = trim($_POST['username_signup']);
        $password = trim($_POST['password_signup']);
        $error_email = check($email);
        $error_username = check_username($username);
        $error_password = check_pass($password);
        if ($error_email == "" && $error_username == "" && $error_password == "") {
            if (count(user_exis($username)) == 0) {
                sign_up($email, $username, $password);
                header("Location: login.php");
            } else {
                echo '<script>alert("Username is already used")</script>';
            }
        }else{
            
        }
    }

    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-8 col-lg-offset-4 col-md-offset-3 col-sm-offset-2">
                <!-- brand-logo start -->

                <!-- authfy-login start -->
                <div class="authfy-login " style=" box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                    <!-- panel-login start -->

                    <div class="authfy-panel panel-signup text-center active">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="authfy-heading">
                                    <h3 class="auth-title">Sign up for free!</h3>
                                </div>
                                <form name="signupForm" class="signupForm" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control" style="margin-bottom: 10px;" name="email_signup" placeholder="Email address">

                                        <p style="color:red; text-align: left;"><?= $error_email ?></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" style="margin-bottom: 10px;" class="form-control" name="username_signup" placeholder="Username">
                                        <p style="color:red; text-align: left;"><?= $error_username; ?></p>

                                    </div>
                                    <div class="form-group">
                                        <div class="pwdMask">
                                            <input type="password" style="margin-bottom: 10px;" class="form-control" name="password_signup" placeholder="Password">
                                            <span class="fa fa-eye-slash pwd-toggle"></span>
                                            <p style="color:red; text-align: left;"><?= $error_password ?></p>

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
                                <a href="login.php">Already have an account?</a>
                            </div>
                        </div>
                    </div>


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