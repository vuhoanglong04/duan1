<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from themeholy.com/php/frutin/demo/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 13:46:29 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Frutin - Organic and Healthy Food php Template - Checkout</title>
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
    <div class="preloader"><button class="th-btn preloaderCls">Cancel Preloader</button>
        <div class="preloader-inner">
            <div class="loader"><span></span> <span></span> <span></span> <span></span> <span></span> <span></span></div>
        </div>
    </div>
    <div class="sidemenu-wrapper sidemenu-cart d-none d-lg-block">
        <div class="sidemenu-content"><button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget woocommerce widget_shopping_cart">
                <h3 class="widget_title">Shopping cart</h3>
                <div class="widget_shopping_cart_content">
                    <ul class="woocommerce-mini-cart cart_list product_list_widget">
                        <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img src="assets/img/product/product_thumb_1_1.jpg" alt="Cart Image">Bosco Apple Fruit</a> <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>940.00</span></span></li>
                        <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img src="assets/img/product/product_thumb_1_2.jpg" alt="Cart Image">Green Cauliflower</a> <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>899.00</span></span></li>
                        <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img src="assets/img/product/product_thumb_1_3.jpg" alt="Cart Image">Mandarin orange</a> <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>756.00</span></span></li>
                        <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img src="assets/img/product/product_thumb_1_4.jpg" alt="Cart Image">Shallot Red onion</a> <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>723.00</span></span></li>
                        <li class="woocommerce-mini-cart-item mini_cart_item"><a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a> <a href="#"><img src="assets/img/product/product_thumb_1_5.jpg" alt="Cart Image">Sour Red Cherry</a> <span class="quantity">1 × <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>1080.00</span></span></li>
                    </ul>
                    <p class="woocommerce-mini-cart__total total"><strong>Subtotal:</strong> <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>4398.00</span></p>
                    <p class="woocommerce-mini-cart__buttons buttons"><a href="cart.php" class="th-btn wc-forward">View cart</a> <a href="checkout.php" class="th-btn checkout wc-forward">Checkout</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="popup-search-box d-none d-lg-block"><button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#"><input type="text" placeholder="What are you looking for?"> <button type="submit"><i class="fal fa-search"></i></button></form>
    </div>
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center"><button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo"><a href="home-organic-farm.php"><img src="assets/img/logo.svg" alt="Frutin"></a></div>
            <div class="th-mobile-menu">
                <ul>
                    <li class="menu-item-has-children"><a href="home-organic-farm.php">Home</a>
                        <ul class="sub-menu">
                            <li><a href="home-organic-farm.php">Organic Farm</a></li>
                            <li><a href="home-organic-food.php">Organic Food</a></li>
                            <li><a href="home-mega-shop.php">Mega Shop</a></li>
                        </ul>
                    </li>
                    <li><a href="about.php">About Us</a></li>
                    <li class="menu-item-has-children"><a href="#">Service</a>
                        <ul class="sub-menu">
                            <li><a href="service.php">Service</a></li>
                            <li><a href="service-details.php">Service Details</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li class="menu-item-has-children"><a href="#">Shop</a>
                                <ul class="sub-menu">
                                    <li><a href="shop.php">Shop</a></li>
                                    <li><a href="shop-details.php">Shop Details</a></li>
                                    <li><a href="cart.php">Cart Page</a></li>
                                    <li><a href="checkout.php">Checkout</a></li>
                                    <li><a href="wishlist.php">Wishlist</a></li>
                                </ul>
                            </li>
                            <li><a href="team.php">Team</a></li>
                            <li><a href="team-details.php">Team Details</a></li>
                            <li><a href="project.php">Project Gallery</a></li>
                            <li><a href="project-details.php">Project Details</a></li>
                            <li><a href="faq.php">Faq Page</a></li>
                            <li><a href="error.php">Error Page</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children"><a href="#">Blog</a>
                        <ul class="sub-menu">
                            <li><a href="blog.php">Blog</a></li>
                            <li><a href="blog-details.php">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>
    <header class="th-header header-layout1">
        <div class="header-top">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <p class="header-notice">Orders of $50 or more qualify for free shipping!</p>
                    </div>
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li class="d-none d-sm-inline-block"><i class="fal fa-location-dot"></i><a href="https://www.google.com/maps">8502 Preston Rd. Inglewood, Maine 98380</a></li>
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
                            <div class="header-logo"><a href="home-organic-farm.php"><img src="assets/img/logo.svg" alt="Frutin"></a></div>
                        </div>
                        <div class="col-auto">
                            <nav class="main-menu d-none d-lg-inline-block">
                                <ul>
                                    <li class="menu-item-has-children"><a href="home-organic-farm.php">Home</a>
                                        <ul class="sub-menu">
                                            <li><a href="home-organic-farm.php">Organic Farm</a></li>
                                            <li><a href="home-organic-food.php">Organic Food</a></li>
                                            <li><a href="home-mega-shop.php">Mega Shop</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.php">About Us</a></li>
                                    <li class="menu-item-has-children"><a href="#">Service</a>
                                        <ul class="sub-menu">
                                            <li><a href="service.php">Service</a></li>
                                            <li><a href="service-details.php">Service Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Pages</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item-has-children"><a href="#">Shop</a>
                                                <ul class="sub-menu">
                                                    <li><a href="shop.php">Shop</a></li>
                                                    <li><a href="shop-details.php">Shop Details</a></li>
                                                    <li><a href="cart.php">Cart Page</a></li>
                                                    <li><a href="checkout.php">Checkout</a></li>
                                                    <li><a href="wishlist.php">Wishlist</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="team.php">Team</a></li>
                                            <li><a href="team-details.php">Team Details</a></li>
                                            <li><a href="project.php">Project Gallery</a></li>
                                            <li><a href="project-details.php">Project Details</a></li>
                                            <li><a href="faq.php">Faq Page</a></li>
                                            <li><a href="error.php">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children"><a href="#">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.php">Blog</a></li>
                                            <li><a href="blog-details.php">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </nav><button type="button" class="th-menu-toggle d-block d-lg-none"><i class="far fa-bars"></i></button>
                        </div>
                        <div class="col-auto d-none d-xl-block">
                            <div class="header-button"><button type="button" class="simple-icon searchBoxToggler"><i class="far fa-search"></i></button> <button type="button" class="simple-icon sideMenuToggler"><span class="badge">5</span> <i class="fa-regular fa-cart-shopping"></i></button> <a href="shop.php" class="th-btn style4">Shop Now<i class="fas fa-chevrons-right ms-2"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Checkout</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-organic-farm.php">Home</a></li>
                    <li>Checkout</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="th-checkout-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="woocommerce-form-login-toggle">
                <div class="woocommerce-info">Returning customer? <a href="#" class="showlogin">Click here to login</a></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="#" class="woocommerce-form-login">
                        <div class="form-group"><label>Username or email *</label> <input type="text" class="form-control" placeholder="Username or email"></div>
                        <div class="form-group"><label>Password *</label> <input type="text" class="form-control" placeholder="Password"></div>
                        <div class="form-group">
                            <div class="custom-checkbox"><input type="checkbox" id="remembermylogin"> <label for="remembermylogin">Remember Me</label></div>
                        </div>
                        <div class="form-group"><button type="submit" class="th-btn">Login</button>
                            <p class="mt-3 mb-0"><a class="text-reset" href="#">Lost your password?</a></p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="woocommerce-form-coupon-toggle">
                <div class="woocommerce-info">Have a coupon? <a href="#" class="showcoupon">Click here to enter your code</a></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="#" class="woocommerce-form-coupon">
                        <div class="form-group"><label>Coupon code</label> <input type="text" class="form-control" placeholder="Write your coupon code"></div>
                        <div class="form-group"><button type="submit" class="th-btn">Apply coupon</button></div>
                    </form>
                </div>
            </div>
            <form action="#" class="woocommerce-checkout mt-40">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="h4">Billing Details</h2>
                        <div class="row">
                            <div class="col-12 form-group"><select class="form-select">
                                    <option>United Kingdom (UK)</option>
                                    <option>United State (US)</option>
                                    <option>Equatorial Guinea (GQ)</option>
                                    <option>Australia (AU)</option>
                                    <option>Germany (DE)</option>
                                </select></div>
                            <div class="col-md-6 form-group"><input type="text" class="form-control" placeholder="First Name"></div>
                            <div class="col-md-6 form-group"><input type="text" class="form-control" placeholder="Last Name"></div>
                            <div class="col-12 form-group"><input type="text" class="form-control" placeholder="Your Company Name"></div>
                            <div class="col-12 form-group"><input type="text" class="form-control" placeholder="Street Address"> <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)"></div>
                            <div class="col-12 form-group"><input type="text" class="form-control" placeholder="Town / City"></div>
                            <div class="col-md-6 form-group"><input type="text" class="form-control" placeholder="Country"></div>
                            <div class="col-md-6 form-group"><input type="text" class="form-control" placeholder="Postcode / Zip"></div>
                            <div class="col-12 form-group"><input type="text" class="form-control" placeholder="Email Address"> <input type="text" class="form-control" placeholder="Phone number"></div>
                            <div class="col-12 form-group"><input type="checkbox" id="accountNewCreate"> <label for="accountNewCreate">Create An Account?</label></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p id="ship-to-different-address"><input id="ship-to-different-address-checkbox" type="checkbox" name="ship_to_different_address" value="1" checked="checked"> <label for="ship-to-different-address-checkbox">Ship to a different address? <span class="checkmark"></span></label></p>
                        <div class="shipping_address">
                            <div class="row">
                                <div class="col-12 form-group"><select class="form-select">
                                        <option>United Kingdom (UK)</option>
                                        <option>United State (US)</option>
                                        <option>Equatorial Guinea (GQ)</option>
                                        <option>Australia (AU)</option>
                                        <option>Germany (DE)</option>
                                    </select></div>
                                <div class="col-md-6 form-group"><input type="text" class="form-control" placeholder="First Name"></div>
                                <div class="col-md-6 form-group"><input type="text" class="form-control" placeholder="Last Name"></div>
                                <div class="col-12 form-group"><input type="text" class="form-control" placeholder="Your Company Name"></div>
                                <div class="col-12 form-group"><input type="text" class="form-control" placeholder="Street Address"> <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)"></div>
                                <div class="col-12 form-group"><input type="text" class="form-control" placeholder="Town / City"></div>
                                <div class="col-md-6 form-group"><input type="text" class="form-control" placeholder="Country"></div>
                                <div class="col-md-6 form-group"><input type="text" class="form-control" placeholder="Postcode / Zip"></div>
                                <div class="col-12 form-group"><input type="text" class="form-control" placeholder="Email Address"> <input type="text" class="form-control" placeholder="Phone number"></div>
                            </div>
                        </div>
                        <div class="col-12 form-group"><textarea cols="20" rows="5" class="form-control" placeholder="Notes about your order, e.g. special notes for delivery."></textarea></div>
                    </div>
                </div>
            </form>
            <h4 class="mt-4 pt-lg-2">Your Order</h4>
            <form action="#" class="woocommerce-cart-form">
                <table class="cart_table mb-20">
                    <thead>
                        <tr>
                            <th class="cart-col-image">Image</th>
                            <th class="cart-col-productname">Product Name</th>
                            <th class="cart-col-price">Price</th>
                            <th class="cart-col-quantity">Quantity</th>
                            <th class="cart-col-total">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="cart_item">
                            <td data-title="Product"><a class="cart-productimage" href="shop-details.php"><img width="91" height="91" src="assets/img/product/product_thumb_1_1.jpg" alt="Image"></a></td>
                            <td data-title="Name"><a class="cart-productname" href="shop-details.php">Bosco Apple Fruit</a></td>
                            <td data-title="Price"><span class="amount"><bdi><span>$</span>18</bdi></span></td>
                            <td data-title="Quantity"><strong class="product-quantity">01</strong></td>
                            <td data-title="Total"><span class="amount"><bdi><span>$</span>18</bdi></span></td>
                        </tr>
                    </tbody>
                    <tfoot class="checkout-ordertable">
                        <tr class="cart-subtotal">
                            <th>Subtotal</th>
                            <td data-title="Subtotal" colspan="4"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>281.05</bdi></span></td>
                        </tr>
                        <tr class="woocommerce-shipping-totals shipping">
                            <th>Shipping</th>
                            <td data-title="Shipping" colspan="4">Enter your address to view shipping options.</td>
                        </tr>
                        <tr class="order-total">
                            <th>Total</th>
                            <td data-title="Total" colspan="4"><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span>281.05</bdi></span></strong></td>
                        </tr>
                    </tfoot>
                </table>
            </form>
            <div class="mt-lg-3 mb-30">
                <div class="woocommerce-checkout-payment">
                    <ul class="wc_payment_methods payment_methods methods">
                        <li class="wc_payment_method payment_method_bacs"><input id="payment_method_bacs" type="radio" class="input-radio" name="payment_method" value="bacs" checked="checked"> <label for="payment_method_bacs">Direct bank transfer</label>
                            <div class="payment_box payment_method_bacs">
                                <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.</p>
                            </div>
                        </li>
                        <li class="wc_payment_method payment_method_cheque"><input id="payment_method_cheque" type="radio" class="input-radio" name="payment_method" value="cheque"> <label for="payment_method_cheque">Cheque Payment</label>
                            <div class="payment_box payment_method_cheque">
                                <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                            </div>
                        </li>
                        <li class="wc_payment_method payment_method_cod"><input id="payment_method_cod" type="radio" class="input-radio" name="payment_method"> <label for="payment_method_cod">Credit Cart</label>
                            <div class="payment_box payment_method_cod">
                                <p>Pay with cash upon delivery.</p>
                            </div>
                        </li>
                        <li class="wc_payment_method payment_method_paypal"><input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal"> <label for="payment_method_paypal">Paypal</label>
                            <div class="payment_box payment_method_paypal">
                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                            </div>
                        </li>
                    </ul>
                    <div class="form-row place-order"><button type="submit" class="th-btn">Place order</button></div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="container z-index-common">
            <div class="newsletter-wrap">
                <div class="newsletter-content">
                    <h4 class="newsletter-title">Sign Up to Get Updates & News About Us.</h4>
                </div>
                <form class="newsletter-form">
                    <div class="form-group"><input class="form-control" type="email" placeholder="Email Address" required=""></div><button type="submit" class="th-btn style6">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer-wrapper footer-layout1" data-bg-src="assets/img/bg/footer_bg_1.jpg">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <div class="th-widget-about">
                                <div class="about-logo"><a href="home-organic-farm.php"><img src="assets/img/logo-footer.svg" alt="Frutin"></a></div>
                                <p class="about-text">We provide specialized winterization services to safeguard your pool during the off-season, and when spring arrives, we handle the thorough opening process.</p>
                                <div class="th-social"><a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a> <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a> <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a> <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title"><img src="assets/img/theme-img/title_icon.svg" alt="Icon">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="about.php">About Us</a></li>
                                    <li><a href="project.php">Portfolio</a></li>
                                    <li><a href="faq.php">Help & FAQs</a></li>
                                    <li><a href="blog.php">Blog</a></li>
                                    <li><a href="contact.php">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title"><img src="assets/img/theme-img/title_icon.svg" alt="Icon">Contact Us</h3>
                            <div class="th-widget-contact">
                                <div class="info-box">
                                    <div class="info-box_icon"><i class="fas fa-location-dot"></i></div>
                                    <p class="info-box_text">8502 Preston Rd. Inglewood, Maine 98380</p>
                                </div>
                                <div class="info-box">
                                    <div class="info-box_icon"><i class="fas fa-phone"></i></div>
                                    <p class="info-box_text"><a href="tel:+16326543564" class="info-box_link">+(163)-2654-3564</a> <a href="tel:+16326545432" class="info-box_link">+(163)-2654-5432</a></p>
                                </div>
                                <div class="info-box">
                                    <div class="info-box_icon"><i class="fas fa-envelope"></i></div>
                                    <p class="info-box_text"><a href="mailto:help24/7@frutin.com" class="info-box_link">help24/7@frutin.com</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title"><img src="assets/img/theme-img/title_icon.svg" alt="Icon">Instagram</h3>
                            <div class="sidebar-gallery">
                                <div class="gallery-thumb"><img src="assets/img/widget/gallery_1_1.jpg" alt="Gallery Image"> <a href="assets/img/widget/gallery_1_1.jpg" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a></div>
                                <div class="gallery-thumb"><img src="assets/img/widget/gallery_1_2.jpg" alt="Gallery Image"> <a href="assets/img/widget/gallery_1_2.jpg" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a></div>
                                <div class="gallery-thumb"><img src="assets/img/widget/gallery_1_3.jpg" alt="Gallery Image"> <a href="assets/img/widget/gallery_1_3.jpg" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a></div>
                                <div class="gallery-thumb"><img src="assets/img/widget/gallery_1_4.jpg" alt="Gallery Image"> <a href="assets/img/widget/gallery_1_4.jpg" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row gy-2 align-items-center">
                    <div class="col-md-6">
                        <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2023 <a href="home-organic-farm.php">Frutin</a>. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="payment-img"><img src="assets/img/normal/payment_methods.png" alt="Image"></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="scroll-top"><svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg></div>
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
<!-- Mirrored from themeholy.com/php/frutin/demo/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 13:46:29 GMT -->

</html>