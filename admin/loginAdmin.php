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

    <title>Admin Login</title>

    <link rel="shortcut icon" type="image/icon" href="../assets/img/favicon-16x16.html" />
    <link rel="stylesheet" href="../assets/css/login1-style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="../assets/css/preloader.css">

    <script src="https://kit.fontawesome.com/dc265cc9f9.js" crossorigin="anonymous"></script>
</head>

<body>
    <style>
        body {
            background-image: url('https://images.unsplash.com/photo-1580196969807-cc6de06c05be?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjR8fGZvb2QlMjBpbGx1c3RyYXRpb258ZW58MHx8MHx8fDA%3D');
            height: 100vh;
        }

        .authfy-login {
            border-radius: 15px;
            overflow: hidden;
        }
    </style>
    <!-- Start Preloader -->
    <div id="preload-block">
        <div class="square-block"></div>
    </div>
    <!-- Preloader End -->

    <div class="container-fluid">
        <div class="row login">
            <div class="col-lg-4 col-md-6 col-sm-8 col-lg-offset-4 col-md-offset-3 col-sm-offset-2">
                <!-- brand-logo start -->

                <div class="authfy-login" style="margin-top: 100px;  box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;">
                    <!-- panel-login start -->
                    <div class="authfy-panel panel-login text-center active">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12">
                                <div class="brand-logo text-center">
                                    <a href="../index.php?act="><img src="../assets/img/logo.svg" width="120" alt="brand-logo"></a>
                                </div>
                                <h2>Welcome Admins</h2>
                                <form name="loginForm" class="loginForm" action="#" method="POST">
                                    <input type="text" class="form-control email" name="username" placeholder="Username">
                                    <div class="pwdMask">
                                        <input type="password" class="form-control password" name="password" placeholder="Password">
                                        <span class="fa fa-eye-slash pwd-toggle"></span>
                                    </div>

                                    <div class="form-group">
                                        <br>
                                        <button class="btn btn-lg btn-block login" style="background-color:#017d03;color:white;font-weight:600" name="admin_login" type="submit">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> <!-- ./panel-login -->

                </div> <!-- ./authfy-login -->
            </div>
        </div> <!-- ./row -->
    </div>
    <?php
    include '../model/pdo.php';
    include '../model/user.php';
    if (isset($_COOKIE['username_admin']) && isset($_COOKIE['password_admin'])) {
        setcookie("username_admin", "", time() - 3600);
        setcookie("password_admin", "", time() - 3600);
        unset($_COOKIE['username_admin']);
        unset($_COOKIE['password_admin']);
    }
    if (isset($_POST['admin_login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $result =  sign_in_admin($username, $password);
        if (count($result) > 0) {
            setcookie('username_admin', $username, time() + 3600);
            setcookie('password_admin', $password, time() + 3600);
            header('Location: admin.php?act=');
        } else echo '<script>alert("You are not ADMIN")</script>';
    }

    ?>
    <script src="../assets/js/jquery-2.2.4.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>

    <script src="../assets/js/custom.js"></script>

</body>

<!-- Mirrored from themeknit.com/demo/html/authfy/demo/login-01.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Nov 2023 11:16:13 GMT -->

</html>