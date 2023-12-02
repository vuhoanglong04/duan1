<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from themeholy.com/php/frutin/demo/cart.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 13:46:28 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Frutin - Organic and Healthy Food php Template - Cart</title>
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
                <h1 class="breadcumb-title">Cart Page</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-organic-farm.php">Home</a></li>
                    <li>Cart Page</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="th-cart-wrapper space-top space-extra-bottom">
        <div class="container">
            <div class="woocommerce-notices-wrapper">
                <div class="woocommerce-message">Shipping costs updated.</div>
            </div>
            <form action="#" class="woocommerce-cart-form">
                <table class="cart_table">
                    <thead>
                        <tr>
                            <th class="cart-col-image">Image</th>
                            <th class="cart-col-productname">Product Name</th>
                            <th class="cart-col-price">Price</th>
                            <th class="cart-col-price">Origin</th>
                            <th class="cart-col-price">Type</th>
                            <th class="cart-col-quantity">Quantity</th>
                            <th class="cart-col-total">Total</th>
                            <th class="cart-col-remove">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(isset($_SESSION['cart'])){
                        foreach ($_SESSION['cart'] as $key => $value) : ?>
                            <tr class="cart_item">
                                <td data-title="Product"><a class="cart-productimage" href="shop-detailis.php"><img width="91" height="91" src="assets/img/product/<?= $value['image_path'] ?>" alt="Image"></a></td>
                                <td data-title="Name"><a class="cart-productname" href="shop-detailis.php"><?= $value['name'] ?></a></td>
                                <td data-title="Price"><span class="amount"><bdi><span>$</span><?= $value['price_product_variant'] ?></bdi></span></td>
                                <td><?= $value['value_origin'] ?></td>
                                <td><?= $value['value_type'] ?></td>

                                <td data-title="Quantity">
                                    <div class="quantity">
                                        <button onclick="mirrorQuanlity(<?= $value['id_product_variant']; ?>, <?= $value['price_product_variant']; ?>)" class="quantity-minus qty-btn"><i class="far fa-minus"></i></button>
                                        <input id="quantity_<?= $value['id_product_variant'] ?>" type="number" class="qty-input" value="<?= $value['quanlity'] ?>" min="1" max="99">
                                        <button onclick="plusQuantity(<?= $value['id_product_variant']; ?>, <?= $value['price_product_variant'] ?>)" class="quantity-plus qty-btn"><i class="far fa-plus"></i></button>
                                    </div>
                                </td>
                                <td data-title="Total">
                                    <span class="amount_<?= $value['id_product_variant'] ?>">$<span class="totalProduct"><?= $value['quanlity'] * $value['price_product_variant'] ?></span>
                                </td>
                                <td data-title="Remove"><a href="deleteCart.php?id_product_variant=<?= $value['id_product_variant'] ?>" class="remove"><i class="fal fa-trash-alt"></i></a></td>
                            </tr>
                        <?php endforeach; }?>
                        <tr>
                            <td colspan="6" class="actions">
                                <!-- <div class="th-cart-coupon">
                                    <input type="text" class="form-control" placeholder="Coupon Code..."> 
                                    <button type="submit" class="th-btn">Apply Coupon</button>
                                </div> -->
                                <a type="submit" href="index.php?act=cart" class="th-btn">Refresh cart</a>
                                <a href="index.php?act=shop" class="th-btn">Continue Shopping</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            
            <div class="row justify-content-end">

                <div class="col-md-8 col-lg-7 col-xl-6">
                    <form action="" method="post">
                        <h2 class="h4 summary-title">Cart Totals</h2>
                        <table class="cart_totals">
                            <tbody>
                                <tr>
                                    <td>Cart Subtotal</td>
                                    <td data-title="Cart Subtotal">
                                        <span class="amount">$ <span>0</span></span>
                                    </td>
                                </tr>
                                <tr class="shipping">
                                    <th>Shipping and Handling</th>
                                    <td data-title="Shipping and Handling">
                                        <ul class="woocommerce-shipping-methods list-unstyled">
                                            <?php foreach ($list_transport as $key => $value) : ?>
                                                <li>
                                                    <input type="radio" id="<?= $value['name_transport'] ?>" class="<?= $value['fee'] ?>" name="shipping_method" value="<?= $value['name_transport'] ?>" class="shipping_method">
                                                    <label for="<?= $value['name_transport'] ?>"><?= $value['name_transport'] ?>($<?= $value['fee'] ?>)</label>
                                                </li>
                                            <?php endforeach ?>
                                        </ul>
                                        <p class="woocommerce-shipping-destination">Shipping options will be updated during checkout.</p>

                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr class="order-total">
                                    <td>Coupon(Optional)</td>
                                    <td data-title="Total">
                                                <input type="text" name="coupon" placeholder="...">
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="wc-proceed-to-checkout mb-30">
                            <input type="submit" name="checkout" class="th-btn" value="PROCEED TO CHECKOUT">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<script>
    updateSum();

    function updateSum() {
        let sum = 0;
        let showTotal = document.querySelector('.cart_totals .amount span');
        let allPrice = document.querySelectorAll('.totalProduct');
        allPrice.forEach(item => {
            sum += Number(item.textContent);
        })
        showTotal.innerHTML = sum;
    }

    function mirrorQuanlity(productId, currenPrice) {
        var currentQuantity = Number(document.getElementById('quantity_' + productId).value) - 1;
        if (currentQuantity == 0) currentQuantity = 1;
        // Thực hiện tăng/giảm số lượng dựa trên action
        let newPrice = currenPrice * currentQuantity;
        let total = document.querySelector('.amount_' + productId).querySelector('span');
        total.innerHTML = newPrice;
        updateSum();
        updateQuanlity(productId, currentQuantity)
    }

    function plusQuantity(productId, currenPrice) {
        var currentQuantity = Number(document.getElementById('quantity_' + productId).value) + 1;
        // Thực hiện tăng/giảm số lượng dựa trên action
        let newPrice = currenPrice * currentQuantity;
        let total = document.querySelector('.amount_' + productId).querySelector('span');
        total.innerHTML = newPrice;

        updateSum();
        updateQuanlity(productId, currentQuantity)
    }

    function updateQuanlity(productId, quanlity) {
        $.ajax({
            url: "quanlity.php",
            type: "POST",
            data: {
                quanlity: quanlity,
                product_id: productId
            },
            success: function(data) {
                console.log(data);
            },
        });
    }

    let allMethodShipping = document.querySelectorAll('.woocommerce-shipping-methods input[name="shipping_method"]');
  
  
</script>

</html>