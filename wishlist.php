<!doctype html>
<html class="no-js" lang="zxx">
<!-- Mirrored from themeholy.com/php/frutin/demo/wishlist.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 13:46:25 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Frutin - Organic and Healthy Food php Template - Wishlist</title>
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
                <h1 class="breadcumb-title">Wishlist</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-organic-farm.php">Home</a></li>
                    <li>Wishlist</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="space">
        <div class="container">
            <div class="tinv-wishlist woocommerce tinv-wishlist-clear">
                <div class="tinv-header">
                    <h2 class="mb-30">Wishlist</h2>
                </div>
                <form action="#" method="post" autocomplete="off">
                    <table class="tinvwl-table-manage-list">
                        <thead>
                            <tr>
                                <th class="product-remove"></th>
                                <th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name"><span class="tinvwl-full">Product Name</span><span class="tinvwl-mobile">Product</span></th>
                                <th class="product-price">Unit Price</th>
                                <th class="product-date">Date Added</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($wish_list as $key => $value) : ?>
                                <tr class="wishlist_item">
                                    <td class="product-remove"><a href="removeWishlist.php?id_wish_list=<?= $value['id_wish_lish'] ?>" type="submit" name="tinvwl-remove" value="58" title="Remove"><i class="fal fa-times"></i></a></td>
                                    <td class="product-thumbnail"><a href="index.php?act=shop-details&&pro=<?= $value['product_id'] ?>"><img style="object-fit: cover;" src="assets/img/product/<?= $value['image_path'] ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="image"></a></td>
                                    <td class="product-name"><a href="index.php?act=shop-details&&pro=<?= $value['product_id'] ?>"><?= $value['name'] ?></a></td>
                                    <td class="product-price"><span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">$</span><?= $value['price'] ?></bdi></span></td>
                                    <td class="product-date"><time class="entry-date" datetime="2021-11-21 03:54:24"><?= $value['date_added'] ?></time></td>
                        
                                    <td class="product-action"><a href="index.php?act=shop-details&&pro=<?=$value['product_id'] ?>" class="button th-btn" name="tinvwl-add-to-cart"><i class="fal fa-shopping-cart"></i><span class="tinvwl-txt">Add to Cart</span></a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </form>
                <div class="social-buttons"><span>Share on</span>
                    <ul>
                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=permalink" class="social social-facebook" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li><a href="https://twitter.com/share?url=permalink" class="social social-twitter" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="http://pinterest.com/pin/create/button/?url=permalink" class="social social-pinterest" title="Pinterest"><i class="fab fa-pinterest-p"></i></a>
                        </li>
                        <li><a href="https://api.whatsapp.com/send?text=permalink" class="social social-whatsapp" title="WhatsApp"><i class="fab fa-whatsapp"></i></a></li>
                        <li><a href="http://vecurosoft.com/products/wordpress/foodelio/wishlist/974b61/" class="social social-clipboard" title="Clipboard"><i class="far fa-clipboard"></i></a>
                        </li>
                        <li><a href="mailto:?body=permalink" class="social social-email" title="Email"><i class="far fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
 

</body>
<!-- Mirrored from themeholy.com/php/frutin/demo/wishlist.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Nov 2023 13:46:25 GMT -->

</html>