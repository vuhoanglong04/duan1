<?php
ob_start();
session_start();
?>
<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from themeholy.com/php/frutin/demo/home-mega-shop.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 13:48:11 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Frutin - Organic and Healthy Food php Template - Home Mega Shop</title>
    <meta name="author" content="Frutin">
    <meta name="description" content="Frutin - Organic and Healthy Food php Template">
    <meta name="keywords" content="Frutin - Organic and Healthy Food php Template">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,100;9..40,200;9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&amp;family=Lexend:wght@300;400;500;600;700;800;900&amp;family=Lobster&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <?php
    include('header.php');
    include('model/pdo.php');
    include('model/user.php');
    include('model/category.php');
    include('model/product.php');
    include('model/coupon.php');
    include('model/orders.php');
    include('model/comment.php');
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    if (isset($_GET['act'])) {
        $act  = $_GET['act'];
        switch ($act) {
            case 'home-mega-shop':
                $list_trending = load_all_trending_product();
                print_r($list_trending);
                include('home-mega-shop.php');
                break;
            case 'shop':
                $list_category = load_all_category();
                $list_product = load_all_product();

                if (isset($_POST['find'])) {
                    $search = $_POST['search'];
                    $list_product = find_product($search);
                }
                if (isset($_POST['order_by'])) {
                    $order = $_POST['select_orderBy'];
                    if ($order == "price") {
                        $list_product =   order_by_price();
                    }
                }
                if (isset($_POST['clear'])) {
                    $list_product = load_all_product();
                }
                // print_r($list_product);
                include('shop.php');
                break;

            case 'shop-details':
                $product_id = $_GET['pro'];
                $product = get_product($product_id)[0];
                $list_origin = get_all_origin_from_product($product_id);
                $list_type = get_all_type_from_product($product_id);
                $list_related = get_related_products($product['id_sub_category'], $product_id);
                $list_image = get_list_img($product_id);
                // print_r($list_image);
                // print_r($list_related);
                if (isset($_POST['add_wish_lish'])) {
                    if (isset($_COOKIE['username'])) {
                        $username = $_COOKIE['username'];
                        add_wish_list($username, $product_id);
                    } else {
                        echo "<script>alert('Please signin')</script>";
                        header('Location: login.php');
                    }
                }

                if (isset($_POST['addToCart'])) {
                    if (!isset($_COOKIE['username'])) {
                        header('Location: login.php');
                    }
                    $id_origin = $_POST['origin'];
                    $id_type = $_POST['type'];
                    $product_in_cart  = get_product_variant_by_condition($product_id, $id_origin, $id_type)[0];
                    // print_r($product_in_cart);
                    if ($product_in_cart['quanlity_inventory'] > '0') {
                        addToCart($product_in_cart);
                        // header('Location: index.php?act=cart');
                        header("Refresh:0");
                    } else echo "<script>alert('SOLD OUT')</script>";
                }
                include('shop-details.php');
                break;

            case 'cart':
                if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
                    $username =  get_user($_COOKIE['username']);
                } else {
                    header("Location: login.php");
                }
                // echo "<pre>";
                // print_r($_SESSION['cart']);
                $list_transport = load_all_transport();
                if (isset($_POST['checkout'])) {
                    if (isset($_POST['shipping_method'])) {
                        $shipping_method = $_POST['shipping_method'];
                        $text_coupon = $_POST['coupon'];
                        $coupon = "";
                        $percent_discount = 0;
                        if ($text_coupon != "") {
                            $get_coupon = get_coupon($text_coupon);
                            if (count($get_coupon) > 0) {
                                $coupon = $get_coupon[0]['code_coupon'];
                                $percent_discount = $get_coupon[0]['percent_discount'];
                            }
                        }

                        $fee =  get_fee_shipping($shipping_method)[0]['fee'];
                        $total  = 0;
                        foreach ($_SESSION['cart'] as $key => $value) {
                            $total += $value['price_product_variant'] * $value['quanlity'];
                        }
                        $date = date('Y-m-d H:i:s');
                        // create_orders($_COOKIE['username'], $date, $shipping_method, $coupon, $total);
                        if (isset($_SESSION['order'])) {
                            $_SESSION['order'] = [];
                            $newItem = array(
                                'username' => $_COOKIE['username'],
                                'date' => $date,
                                'name_transport' => $shipping_method,
                                'fee' => $fee,
                                'coupon' => $coupon,
                                'percent_discount' =>  $percent_discount,
                                'total' => $total,
                            );
                            $_SESSION['order'][] = $newItem;
                        } else {
                            $newItem = array(
                                'username' => $_COOKIE['username'],
                                'date' => $date,
                                'name_transport' => $shipping_method,
                                'fee' => $fee,
                                'coupon' => $coupon,
                                'percent_discount' =>  $percent_discount,
                                'total' => $total,
                            );
                            $_SESSION['order'][] = $newItem;
                        }

                        header('Location:index.php?act=checkout');
                    } else echo "<script>alert('Please choose shipping method')</script>";
                }
                include('cart.php');
                break;

            case 'checkout':
                // print_r($_SESSION['order']);
                $user = get_user($_COOKIE['username']);
                $fee =  get_fee_shipping($_SESSION['order'][0]['name_transport'])[0]['fee'];
                $list_payment = get_payment();
                if (isset($_POST['cancel'])) {
                    $_SESSION['order'] = [];
                    header('Location: index.php?act=cart');
                }
                if (isset($_POST['place_order'])) {
                    if (isset($_POST['payment_method'])) {
                        $payment_methods = $_POST['payment_method'];
                        $date = date("Y-m-d H:i:s");
                        $name_transport = $_SESSION['order'][0]['name_transport'];
                        $coupon = $_SESSION['order'][0]['coupon'];
                        $total =  $_SESSION['order'][0]['total'] + $_SESSION['order'][0]['fee'] - $_SESSION['order'][0]['total'] * $_SESSION['order'][0]['percent_discount'] / 100;
                        if ($payment_methods == 'VNPAY(Vietnamese)' && isset($_POST['statusX']) && $_POST['statusX'] == 'Success!!') {
                            create_orders($_COOKIE['username'], $date, $name_transport, $coupon, $total, $payment_methods);
                            $latest_order = get_latest_order()[0]['id_order'];
                            foreach ($_SESSION['cart'] as $key => $value) {
                                create_order_detail(
                                    $latest_order,
                                    $value['id_product_variant'],
                                    $value['id_origin'],
                                    $value['id_type'],
                                    $value['quanlity'],
                                    $value['price_product_variant'],
                                    $value['quanlity'] * $value['price_product_variant']
                                );
                            }
                            $_SESSION['cart'] = [];
                            $_SESSION['order'] = [];
                            header('Location: index.php?act=history');
                        } else echo "<script>alert('Please checkout the order')</script>";

                        if ($payment_methods == 'Cash On Delivery') {
                            create_orders($_COOKIE['username'], $date, $name_transport, $coupon, $total, $payment_methods);
                            $latest_order = get_latest_order()[0]['id_order'];
                            foreach ($_SESSION['cart'] as $key => $value) {
                                create_order_detail(
                                    $latest_order,
                                    $value['id_product_variant'],
                                    $value['id_origin'],
                                    $value['id_type'],
                                    $value['quanlity'],
                                    $value['price_product_variant'],
                                    $value['quanlity'] * $value['price_product_variant']
                                );
                            }
                            $_SESSION['cart'] = [];
                            $_SESSION['order'] = [];
                            header('Location: index.php?act=history');
                        }
                    } else echo "<script>alert('Please choose payment methods');</script>";
                }
                include('checkout.php');
                break;
            case 'history':
                if (isset($_COOKIE['username'])) {
                    $username = $_COOKIE['username'];
                    $list_order = get_orders($username);
                    // print_r($list_order);
                } else {
                    header("Location: login.php");
                }
                include('history.php');
                break;
            case "detail_order":
                $id_order = $_GET['id_order'];
                $full_order = get_order_by_id($id_order);
                $user = get_user($_COOKIE['username']);
                // print_r($user);
                $order = get_detail_order_by_id($id_order);
                // print_r($order);
                include('detailOrder.php');
                break;
            case 'wishlist':
                if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
                } else {
                    header("Location: login.php");
                }

                $username = $_COOKIE['username'];
                $wish_list = get_wish_list($username);

                include('wishlist.php');
                break;
            case 'shop_details':
                include('shop-details.php');
                break;
            case 'faq':
                include('faq.php');
                break;

            case 'error':
                include('error.php');
                break;

            case "blog":
                include('blog.php');
                break;
            case "blog-details":
                include('blog-details.php');
                break;
            case "login":
                header('Location: login.php');
                break;
            case "profile":
                if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
                    $username =  get_user($_COOKIE['username']);
                } else {
                    header("Location: login.php");
                }

                if (isset($_POST['logout'])) {
                    setcookie("username", "", time() - 100000);
                    setcookie("password", "", time() - 100000);
                    unset($_COOKIE['username']);
                    unset($_COOKIE['password']);
                    header("Refresh:0");
                }
                if (isset($_POST['update_general'])) {
                    $general_full_name = $_POST['general_full_name'];
                    $general_email = $_POST['general_email'];
                    $general_address = $_POST['general_address'];
                    $general_telephone = $_POST['general_telephone'];
                    update_user($_COOKIE['username'], $general_full_name, $general_email, $general_address, $general_telephone);
                    header("Refresh:0");
                }

                if (isset($_POST['finish_update_image'])) {
                    $username =  get_user($_COOKIE['username']);
                    $new_image = $_FILES['update_image']['name'];
                    $tmp = $_FILES['update_image']['tmp_name'];
                    if ($_FILES['update_image']['size'] > 0) {
                        $move = "./assets/img/user/" . $new_image;
                        move_uploaded_file($tmp, $move);
                        update_avatar($_COOKIE['username'],  $new_image);
                        header("Refresh:0");
                    } else {
                        update_avatar($_COOKIE['username'],  $username[0]['image']);
                    }
                }

                //Changes Pass
                if (isset($_POST['change_pass'])) {
                    $current_password = $_POST['current_password'];
                    $new_password = $_POST['new_password'];
                    $confirm_new_password = $_POST['confirm_new_password'];
                    if ($current_password == "" || $new_password == "" || $confirm_new_password == "") {
                        echo "<script>alert('Please enter your information')</script>";
                    } else if (checkPassword($_COOKIE['username'], $current_password)) {
                        if ($new_password == $confirm_new_password) {
                            change_password($_COOKIE['username'], $new_password);
                            echo "<script>alert('Success!!!')</script>";
                        } else echo "<script>alert('Confirm Password is not correct')</script>";
                    } else echo "<script>alert('Wrong Password')</script>";
                }


                include('profile.php');
                break;

            default:
                $list_trending = load_all_trending_product();

                include('home-mega-shop.php');
                break;
        }
    } else {
        $list_trending = load_all_trending_product();

        include('home-mega-shop.php');
    }
    include('footer.php');

    ?>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
<script src="https://tudongchat.com/js/chatbox.js"></script>

<script>
    const tudong_chatbox = new TuDongChat('l9Iyu4HCp9EpKkABw9YqJ')
    tudong_chatbox.initial()
</script>

</html>