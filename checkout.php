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

            <form action="#" class="woocommerce-checkout mt-40">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="h4">Billing Details</h2>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="username">Username</label>
                                <input type="text" id="username" class="form-control" value="<?= $user[0]['username'] ?>" readonly>
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="full_name">Full Name</label>
                                <input type="text" id="full_name" class="form-control" value="<?= $user[0]['full_name'] ?>" readonly>
                            </div>

                            <div class="col-12 form-group">
                                <label for="email">Email</label>
                                <input type="text" id="email" class="form-control" value="<?= $user[0]['email'] ?>" readonly>
                            </div>

                            <div class="col-12 form-group">
                                <label for="address">Address</label>
                                <input type="text" id="address" class="form-control" value="<?= $user[0]['address'] ?>" readonly>
                            </div>

                            <div class="col-12 form-group">
                                <label for="telephone">Telephone</label>
                                <input type="text" id="telephone" class="form-control" value="<?= $user[0]['telephone'] ?>" readonly>
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="country">Country</label>
                                <input type="text" id="country" class="form-control" placeholder="Country" value="Vietnam" readonly>
                            </div>

                            <div class="col-12 form-group">
                                <a href="index.php?act=profile" class="btn btn-success">Change Information?</a>
                            </div>
                        </div>
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
                            <th>Origin</th>
                            <th>Type</th>
                            <th class="cart-col-price">Price</th>
                            <th class="cart-col-quantity">Quantity</th>
                            <th class="cart-col-total">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($_SESSION['cart'] as $key => $value) : ?>
                            <tr class="cart_item">
                                <td data-title="Product"><a class="cart-productimage" href="index.php?act=shop-details&&pro=<?= $value['id_product'] ?>"><img width="91" height="91" src="assets/img/product/<?= $value['image_path'] ?>" alt="Image"></a></td>
                                <td data-title="Name"><a class="cart-productname" href="index.php?act=shop-details&&pro=<?= $value['id_product'] ?>"><?= $value['name'] ?></a></td>
                                <td><?= $value['value_origin'] ?></td>
                                <td><?= $value['value_type'] ?></td>
                                <td data-title="Price"><span class="amount"><bdi><span>$</span><?= $value['price_product_variant'] ?></bdi></span></td>
                                <td data-title="Quantity"><strong class="product-quantity"><?= $value['quanlity'] ?></strong></td>
                                <td data-title="Total"><span class="amount"><bdi><span>$</span><?= $value['quanlity'] * $value['price_product_variant'] ?></bdi></span></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot class="checkout-ordertable">
                        <tr class="cart-subtotal">
                            <th></th>
                            <th></th>
                            <th>Subtotal</th>
                            <td data-title="Subtotal" colspan="4"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span><?= $_SESSION['order'][0]['total'] ?></bdi></span></td>
                        </tr>
                        <tr class="woocommerce-shipping-totals shipping">
                            <th></th>
                            <th></th>
                            <th>Shipping</th>
                            <td data-title="Shipping" colspan="4"><?= $_SESSION['order'][0]['name_transport'] ?>($<?= $_SESSION['order'][0]['fee'] ?>)</td>
                        </tr>
                        <tr class="woocommerce-shipping-totals shipping">
                            <th></th>
                            <th></th>
                            <th>Coupon</th>
                            <td data-title="Shipping" colspan="4"><?= $_SESSION['order'][0]['coupon'] ?>(-<?= $_SESSION['order'][0]['percent_discount'] ?>%)</td>
                        </tr>
                        <tr class="order-total">
                            <th></th>
                            <th></th>
                            <th>Total</th>
                            <td data-title="Total" colspan="4"><strong><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span><?= $_SESSION['order'][0]['total'] + $_SESSION['order'][0]['fee'] - $_SESSION['order'][0]['total'] * $_SESSION['order'][0]['percent_discount'] / 100  ?></bdi></span></strong></td>
                        </tr>

                    </tfoot>
                </table>
            </form>

            <div class="mt-lg-3 mb-30">
                <form action="" method="post">
                    <div class="woocommerce-checkout-payment">
                        <ul class="wc_payment_methods payment_methods methods">
                            <?php foreach ($list_payment as $key => $value) : ?>
                                <li class="wc_payment_method payment_method_bacs">
                                    <input id="payment_method_bacs_<?= $value['name_payment'] ?>" type="radio" class="input-radio" name="payment_method" value="<?= $value['name_payment'] ?>" <?php
                                                                                                                                                                                                if ($value['name_payment'] == 'VNPAY(Vietnamese)' && isset($_GET['vnp_TransactionStatus']) && $_GET['vnp_TransactionStatus'] == '00') {
                                                                                                                                                                                                    echo "checked";
                                                                                                                                                                                                }
                                                                                                                                                                                                ?>>
                                    <label for="payment_method_bacs_<?= $value['name_payment'] ?>"><?= $value['name_payment'] ?></label>
                                    <div class="payment_box payment_method_bacs">

                                        <?php
                                        if ($value['name_payment'] == 'VNPAY(Vietnamese)') {
                                            if (isset($_GET['vnp_TransactionStatus']) && $_GET['vnp_TransactionStatus'] == '00') {
                                                echo "
                                                <input type='text' name='statusX' value='Success!!' readonly style='color:green ; font-size:25px'>
                                                ";
                                            } else {
                                                echo "
                                                <a class='btn btn-success' type='submit' href='gatePayment.php?redirect=1&&total=".$_SESSION['order'][0]['total'] + $_SESSION['order'][0]['fee'] - $_SESSION['order'][0]['total'] * $_SESSION['order'][0]['percent_discount'] / 100 ."' >Pay: $" . $_SESSION['order'][0]['total'] + $_SESSION['order'][0]['fee'] - $_SESSION['order'][0]['total'] * $_SESSION['order'][0]['percent_discount'] / 100 . ".00</a>
                                                ";
                                            }
                                        } else {
                                            echo "";
                                        }
                                        ?>
                                    </div>
                                </li>
                            <?php endforeach ?>
                        </ul>
                        <div class="form-row place-order">
                            <button type="submit" name="cancel" class="th-btn">Cancel</button>
                            <button type="submit" name="place_order" class="th-btn">Place order</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>


</body>
<!-- Mirrored from themeholy.com/php/frutin/demo/checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 13:46:29 GMT -->

</html>
