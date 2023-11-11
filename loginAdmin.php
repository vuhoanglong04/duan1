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

    <title>Authfy : Login-01</title>

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
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <h2>Welcome Admins</h2>
                                <form name="loginForm" class="loginForm" action="#" method="POST">
                                    <input type="email" class="form-control email" name="username" placeholder="Email address">
                                    <div class="pwdMask">
                                        <input type="password" class="form-control password" name="password" placeholder="Password">
                                        <span class="fa fa-eye-slash pwd-toggle"></span>
                                    </div>
                         
                                    <div class="form-group">
                                        <br>
                                        <button class="btn btn-lg btn-block login" style="background-color:#017d03;color:white;font-weight:600" type="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- ./panel-login -->

                </div> <!-- ./authfy-login -->
            </div>
        </div> <!-- ./row -->
    </div> <!-- ./container -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/js/custom.js"></script>

</body>

<!-- Mirrored from themeknit.com/demo/html/authfy/demo/login-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Nov 2023 11:16:13 GMT -->

</html>