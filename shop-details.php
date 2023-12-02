<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Frutin - Organic and Healthy Food php Template - Shop Details</title>
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
        html {
            scroll-behavior: smooth;
        }

        :focus {
            outline: 0;
            border-color: #017D03;
            box-shadow: 0 0 0 4px #b5c9fc;
        }

        .mydict div {
            display: flex;
            flex-wrap: wrap;
            margin-top: 0.5rem;
            justify-content: center;
            justify-content: left;
        }

        .mydict input[type="radio"] {
            clip: rect(0 0 0 0);
            clip-path: inset(100%);
            height: 1px;
            overflow: hidden;
            position: absolute;
            white-space: nowrap;
            width: 1px;
        }

        .mydict input[type="radio"]:checked+span {
            box-shadow: 0 0 0 0.0625em #0043ed;
            background-color: #017D03;
            z-index: 1;
            color: white;
        }

        label span {
            display: block;
            cursor: pointer;
            background-color: #fff;
            padding: 0.375em .75em;
            position: relative;
            margin-left: .0625em;
            box-shadow: 0 0 0 0.0625em #b5bfd9;
            letter-spacing: .05em;
            color: #3e4963;
            text-align: center;
            transition: background-color .5s ease;
        }

        label:first-child span {
            border-radius: .375em 0 0 .375em;
        }

        label:last-child span {
            border-radius: 0 .375em .375em 0;
        }
    </style>
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Shop Details</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-organic-farm.php">Home</a></li>
                    <li>Shop Details</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="product-details space-top space-extra-bottom">
        <div class="container">
            <div class="row gx-60">
                <div class="col-lg-6">
                    <div class="product-big-img">
                        <div class="img"><img src="assets/img/product/<?= get_main_image($product_id)[0]['image_path'] ?>" alt="Product Image"></div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="product-about">

                        <h2 class="product-title"><?= $product['name']  ?></h2>
                        <div class="product-rating">
                            <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></div><a href="shop-details.php" class="woocommerce-review-link"></a>
                        </div>
                        <p class="text"><?= substr($product['desciption'], 0, 200)  ?>... <a id="roll" href="#productTab">Read more</a> </p>
                        <h4 class="price">$<?= $product['price']  ?>.00</h4>
                        <div class="mt-2 link-inherit">
                            <p><strong class="text-title me-3">Availability:</strong> <span class="stock in-stock"><i class="far fa-check-square me-2 ms-1"></i>In Stock</span></p>
                        </div>
                        <form action="" method="post">
                            <div class="choose_origin">
                                <p><strong class="text-title me-3">Origin:</strong></p>
                                <div class="mydict">

                                    <div>
                                        <?php foreach ($list_origin as $key => $value) : ?>
                                            <label>
                                                <input name="origin" type="radio" value="<?= $value['id_origin'] ?>">
                                                <span><?= $value['value_origin'] ?></span>
                                            </label>
                                        <?php endforeach; ?>
                                    </div>

                                </div>
                            </div>

                            <div class="choose_type">
                                <p><strong class="text-title me-3">Type:</strong></p>

                                <input type="btn btn-primary" type="text" disabled>
                            </div>


                            <div class="actions">
                                <button name="addToCart" class="th-btn addToCart">Add to Cart: <span id="total" class="tong" style="color:white"></span></button>
                                <button name="add_wish_lish" class="icon-btn"><i class="far fa-heart"></i></button>
                            </div>
                            <div class="product_meta"><span class="sku_wrapper">SKU: <span class="sku"><?= $product['name']  ?></span></span> <span class="posted_in">Category: <a href="shop.php"><?= $product['name_sub_category']  ?></a></span> <span>Tags: <a href="shop.php"><?= $product['name_sub_category']  ?></a></span></div>

                        </form>
                    </div>
                </div>
            </div>
            <ul class="nav product-tab-style1" id="productTab" role="tablist">
                <li class="nav-item" role="presentation"><a class="nav-link th-btn active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="false">Product Description</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link th-btn " id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="true">Customer Reviews</a></li>
            </ul>
            <div class="tab-content  " id="productTabContent">
                <div class="tab-pane fade  show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                    <p><?= $product['desciption']  ?></p>
                </div>
                <div class="tab-pane fade " id="reviews" role="tabpanel" aria-labelledby="reviews-tab">

                    <iframe name="commentFrame" src="loadComment.php?product_id=<?= $product_id ?>" id="commentFrame" width="100%" height="700px" style="overflow: scroll;">
                    </iframe>
                </div>

            </div>
            <div class="space-extra-top mb-30">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-auto">
                        <h2 class="sec-title text-center">Related Products</h2>
                    </div>
                    <div class="col-md d-none d-sm-block">
                        <hr class="title-line">
                    </div>
                    <div class="col-md-auto d-none d-md-block">
                        <div class="sec-btn">
                            <div class="icon-box"><button data-slider-prev="#productSlider1" class="slider-arrow default"><i class="far fa-arrow-left"></i></button> <button data-slider-next="#productSlider1" class="slider-arrow default"><i class="far fa-arrow-right"></i></button></div>
                        </div>
                    </div>
                </div>
                <div class="swiper th-slider has-shadow" id="productSlider1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"2"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"3"},"1200":{"slidesPerView":"4"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="th-product product-grid">
                                <div class="product-img"><img src="assets/img/product/product_1_1.jpg" alt="Product Image"> <span class="product-tag">Hot</span>
                                    <div class="actions"><a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a> <a href="cart.php" class="icon-btn"><i class="far fa-cart-plus"></i></a> <a href="wishlist.php" class="icon-btn"><i class="far fa-heart"></i></a></div>
                                </div>
                                <div class="product-content"><a href="shop-details.php" class="product-category">Fresh Fruits</a>
                                    <h3 class="product-title"><a href="shop-details.php">Bosco Apple Fruit</a></h3><span class="price">$177.85</span>
                                    <div class="woocommerce-product-rating"><span class="count">(120 Reviews)</span>
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-product product-grid">
                                <div class="product-img"><img src="assets/img/product/product_1_2.jpg" alt="Product Image"> <span class="product-tag">New</span>
                                    <div class="actions"><a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a> <a href="cart.php" class="icon-btn"><i class="far fa-cart-plus"></i></a> <a href="wishlist.php" class="icon-btn"><i class="far fa-heart"></i></a></div>
                                </div>
                                <div class="product-content"><a href="shop-details.php" class="product-category">Vegetables</a>
                                    <h3 class="product-title"><a href="shop-details.php">Green Cauliflower</a></h3><span class="price">$39.85</span>
                                    <div class="woocommerce-product-rating"><span class="count">(120 Reviews)</span>
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-product product-grid">
                                <div class="product-img"><img src="assets/img/product/product_1_3.jpg" alt="Product Image"> <span class="product-tag">Hot</span>
                                    <div class="actions"><a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a> <a href="cart.php" class="icon-btn"><i class="far fa-cart-plus"></i></a> <a href="wishlist.php" class="icon-btn"><i class="far fa-heart"></i></a></div>
                                </div>
                                <div class="product-content"><a href="shop-details.php" class="product-category">Vegetables</a>
                                    <h3 class="product-title"><a href="shop-details.php">Mandarin orange</a></h3><span class="price">$96.85</span>
                                    <div class="woocommerce-product-rating"><span class="count">(120 Reviews)</span>
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-product product-grid">
                                <div class="product-img"><img src="assets/img/product/product_1_4.jpg" alt="Product Image"> <span class="product-tag">Sale</span>
                                    <div class="actions"><a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a> <a href="cart.php" class="icon-btn"><i class="far fa-cart-plus"></i></a> <a href="wishlist.php" class="icon-btn"><i class="far fa-heart"></i></a></div>
                                </div>
                                <div class="product-content"><a href="shop-details.php" class="product-category">Fresh Fruits</a>
                                    <h3 class="product-title"><a href="shop-details.php">Shallot Red onion</a></h3><span class="price">$08.85<del>$06.99</del></span>
                                    <div class="woocommerce-product-rating"><span class="count">(120 Reviews)</span>
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-product product-grid">
                                <div class="product-img"><img src="assets/img/product/product_1_5.jpg" alt="Product Image"> <span class="product-tag">New</span>
                                    <div class="actions"><a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a> <a href="cart.php" class="icon-btn"><i class="far fa-cart-plus"></i></a> <a href="wishlist.php" class="icon-btn"><i class="far fa-heart"></i></a></div>
                                </div>
                                <div class="product-content"><a href="shop-details.php" class="product-category">Fresh Fruits</a>
                                    <h3 class="product-title"><a href="shop-details.php">Sour Red Cherry</a></h3><span class="price">$32.85</span>
                                    <div class="woocommerce-product-rating"><span class="count">(120 Reviews)</span>
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-product product-grid">
                                <div class="product-img"><img src="assets/img/product/product_1_6.jpg" alt="Product Image"> <span class="product-tag">Hot</span>
                                    <div class="actions"><a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a> <a href="cart.php" class="icon-btn"><i class="far fa-cart-plus"></i></a> <a href="wishlist.php" class="icon-btn"><i class="far fa-heart"></i></a></div>
                                </div>
                                <div class="product-content"><a href="shop-details.php" class="product-category">Fresh Fruits</a>
                                    <h3 class="product-title"><a href="shop-details.php">Strawberry Fruits</a></h3><span class="price">$30.85</span>
                                    <div class="woocommerce-product-rating"><span class="count">(120 Reviews)</span>
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-product product-grid">
                                <div class="product-img"><img src="assets/img/product/product_1_7.jpg" alt="Product Image"> <span class="product-tag">New</span>
                                    <div class="actions"><a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a> <a href="cart.php" class="icon-btn"><i class="far fa-cart-plus"></i></a> <a href="wishlist.php" class="icon-btn"><i class="far fa-heart"></i></a></div>
                                </div>
                                <div class="product-content"><a href="shop-details.php" class="product-category">Fresh Fruits</a>
                                    <h3 class="product-title"><a href="shop-details.php">Six Ripe Banana</a></h3><span class="price">$232.85</span>
                                    <div class="woocommerce-product-rating"><span class="count">(120 Reviews)</span>
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="th-product product-grid">
                                <div class="product-img"><img src="assets/img/product/product_1_8.jpg" alt="Product Image"> <span class="product-tag">Hot</span>
                                    <div class="actions"><a href="#QuickView" class="icon-btn popup-content"><i class="far fa-eye"></i></a> <a href="cart.php" class="icon-btn"><i class="far fa-cart-plus"></i></a> <a href="wishlist.php" class="icon-btn"><i class="far fa-heart"></i></a></div>
                                </div>
                                <div class="product-content"><a href="shop-details.php" class="product-category">Fresh Meat</a>
                                    <h3 class="product-title"><a href="shop-details.php">Sausage Ribs Beef</a></h3><span class="price">$30.85</span>
                                    <div class="woocommerce-product-rating"><span class="count">(120 Reviews)</span>
                                        <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-block d-md-none mt-40 text-center">
                    <div class="icon-box"><button data-slider-prev="#productSlider1" class="slider-arrow default"><i class="far fa-arrow-left"></i></button> <button data-slider-next="#productSlider1" class="slider-arrow default"><i class="far fa-arrow-right"></i></button></div>
                </div>
            </div>
        </div>
    </section>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    document.querySelector('#roll').addEventListener('click', function(e) {
        e.preventDefault();
        var targetId = this.getAttribute('href').substring(1);
        var targetElement = document.getElementById(targetId);

        // Cuộn đến phần tử với hiệu ứng mượt mà
        targetElement.scrollIntoView({
            behavior: 'smooth'
        });
    })
    var choose_origin = document.querySelector('.choose_origin');
    var selectOrigin = choose_origin.querySelectorAll('input[name="origin"]');
    var id_origin = selectOrigin[0].value;
    // var id_type = selectType[0].value;
    // loadPrice(id_origin, id_type);
    selectOrigin.forEach(item => {
        item.addEventListener('change', function() {
            id_origin = this.value;
            $.ajax({
                url: "loadRadioType.php",
                type: "POST",
                data: {
                    product_id: <?= $product_id ?>,
                    id_origin: this.value,
                },
                success: function(data) {
                    $(".choose_type").replaceWith(data);
                },
            });

        })
    })
</script>



</html>