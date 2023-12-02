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
    <style>
        #nameOrigin {
            color: white;
            background-color: #9AD0C2;
            border-radius: 4px;
            margin-left: 5px;
        }

        #nameType {
            color: white;
            background-color: #5FBDFF;
            border-radius: 4px;
            margin-left: 5px;
        }

        .remove_from_cart_button:hover {
            cursor: pointer;
        }
    </style>
    <div class="preloader"><button class="th-btn preloaderCls">Cancel Preloader</button>
        <div class="preloader-inner">
            <div class="loader"><span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
            </div>
        </div>
    </div>
    <div class="sidemenu-wrapper sidemenu-cart d-none d-lg-block">
        <div class="sidemenu-content"><button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget woocommerce widget_shopping_cart">
                <h3 class="widget_title">Shopping cart</h3>
                <div class="widget_shopping_cart_content">
                    <ul class="woocommerce-mini-cart cart_list product_list_widget">
                        <?php $total = 0; ?>
                        <?php
                        if (isset($_SESSION['cart']) && isset($_COOKIE['username'])) {
                            foreach ($_SESSION['cart'] as $key => $value) : ?>
                                <?php

                                $total += $value['quanlity'] * $value['price_product_variant']  ?>
                                <li class="woocommerce-mini-cart-item mini_cart_item">
                                    <a href="deleteCart.php?id_product_variant=<?= $value['id_product_variant']; ?>" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                                    <a href="#"><img style="object-fit: cover;" src="assets/img/product/<?= $value['image_path'] ?>" alt="Cart Image"><?= $value['name']  ?></a>
                                    <span class="quantity">
                                        <?= $value['quanlity'] ?> × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span><?= $value['price_product_variant'] ?>.00
                                        </span>
                                        <p id="nameOrigin"><?= $value['value_origin'] ?></p>
                                        <p id="nameType"><?= $value['value_type'] ?></p>

                                    </span>
                                </li>
                        <?php endforeach;
                        } ?>

                    </ul>
                    <p class="woocommerce-mini-cart__total total"><strong>Subtotal:</strong> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span><?= $total ?></span></p>
                    <p class="woocommerce-mini-cart__buttons buttons"><a href="index.php?act=cart" class="th-btn wc-forward">View
                            cart</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-search-box d-none d-lg-block"><button class="searchClose"><i class="fal fa-times"></i></button>
        <form method="post">
            <input type="text" placeholder="What are you looking for?">
            <button name="search_modal" type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div>
    <?php
    if (isset($_POST['search_modal'])) {
        header("Location: index.php?act=shop");
    }
    ?>

    <?php
    $user_profile = "<a href='index.php?act=login' class='th-btn style4'>Login<i class='fas fa-chevrons-right ms-2'></i></a>";
    $user_profile_mobile = "<a href='index.php?act=login'  class='th-btn mobile_a style4'>Login</a>";
    if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
        $user_profile = "<a href='index.php?act=profile' class='th-btn style4'><i class='fa-solid fa-user-large' style='font-size:25px;color:white;'></i><a>";
        $user_profile_mobile = "<a href='index.php?act=profile' class='th-btn mobile_a style4 mt-2'><i class='fa-solid fa-user-large' style='font-size:25px;color:white;'></i><a>";
    }

    ?>
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center"><button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo"><a href="home-organic-farm.php"><img src="assets/img/logo.svg" alt="Frutin"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li><a href="index.php?act=">Home</a></li>
                    <li><a href="index.php?act=shop">Shop</a></li>
                    <li><a href="index.php?act=cart">Cart</a></li>
                    <li><a href="index.php?act=wishlist">Wishlist</a></li>
                    <li><a href="index.php?act=history">Order History</a></li>

                    <li><a href="index.php?act=blog">Blog</a></li>
                    <?= $user_profile_mobile ?>

                </ul>

            </div>
        </div>
    </div>
    <header class="th-header header-layout1">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center text-right justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <p></p>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li class="d-none d-sm-inline-block"><i class="fal fa-location-dot"></i><a href="https://www.google.com/maps">136 Cau Giay, Ha Noi,Viet Name</a>
                                </li>
                                <li>
                                    <div class="social-links"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a> <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a> <a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="header-logo"><a href="index.php?act="><img src="assets/img/logo.svg" alt="Frutin"></a></div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li><a href="index.php?act=">Home</a></li>
                                    <li><a href="index.php?act=shop">Shop</a></li>
                                    <li><a href="index.php?act=cart">Cart</a></li>
                                    <li><a href="index.php?act=wishlist">Wishlist</a></li>
                                    <li><a href="index.php?act=history">Order History</a></li>

                                    <li><a href="index.php?act=blog">Blog</a></li>

                                </ul>
                            </nav><button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                        </div>

                        <?php
                        $user_profile = "<a href='index.php?act=login' class='th-btn style4'>Login<i class='fas fa-chevrons-right ms-2'></i></a>";

                        if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
                            $user_profile = "<a href='index.php?act=profile' class='th-btn style4'><i class='fa-solid fa-user-large' style='font-size:25px;color:white;'></i><a>";
                        } else
                            $user_profile = "<a href='index.php?act=login' class='th-btn style4'>Login<i class='fas fa-chevrons-right ms-2'></i></a>";


                        ?>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button"><button type="button" class="simple-icon searchBoxToggler"><i class="far fa-search"></i></button> <button type="button" class="simple-icon sideMenuToggler"><span class="badge">5</span> <i class="fa-regular fa-cart-shopping"></i></button> <?= $user_profile ?> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>

<script>
    var badge = document.querySelector('.badge')
    var count = 0;
    document.querySelectorAll('.mini_cart_item').forEach(item => {
        count++;
    })
    badge.innerHTML = count
</script>


</html>