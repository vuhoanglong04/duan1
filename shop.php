<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Frutin - Organic and Healthy Food php Template - Shop</title>
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
        .tag-item {
            justify-content: left;
            margin-top: 15px;
        }

        .tag-item li {
            /* width: 5rem; */
            background-color: greenyellow;
            font-size: 25px;
            font-weight: bolder;
            padding: 6px 12px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 15px;
        }

        .tag-item li i {
            font-size: larger;
            margin-left: 7px;
        }

        .tag-item li:hover {
            cursor: pointer;
            opacity: 0.7;
        }

        .search {
            position: relative;
            overflow: hidden;
        }

        .search input {
            padding-left: 4rem;
            font-size: 20px;
        }

        .search button {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
            font-size: 30px;
            border: none;
            background-color: transparent;
        }

        .hidden {
            display: none;
        }
    </style>
    <div class="breadcumb-wrapper" data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Shop</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-organic-farm.php">Home</a></li>
                    <li>Shop</li>
                </ul>
            </div>
        </div>
    </div>
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="th-sort-bar">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-2">
                        <form action="" method="post">
                            <button name="clear"class="btn btn-success">Clear Filters</button>
                        </form>
                    </div>
                    <div class="col-auto">

                        <?php foreach ($list_category as $key => $value) : ?>
                            <!-- Example single danger button -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?= $value['name_category'] ?>
                                </button>
                                <ul class="dropdown-menu">
                                    <?php $list_sub_category = get_sub_category_by_id_category($value['category_id']);
                                    foreach ($list_sub_category as $x => $y) : ?>
                                        <li>
                                            <span onclick="filterByCategory(this)" class="dropdown-item">
                                                <?= $y['name_sub_category'] ?>
                                            </span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endforeach ?>
                    </div>
                    <div class="col-md-auto">
                        <form method="post" style="display: grid;grid-template-columns: 1fr 0.5fr ; gap:10px;">
                            <select name="select_orderBy" class="orderby" aria-label="Shop order">
                                <option value="" selected="selected" hidden>Default Sorting</option>
                                <option value="price">Sort by top 5 price</option>
                            </select>
                            <button type="submit" class="btn btn-success" name="order_by">Order By</button>
                        </form>
                    </div>
                </div>
            </div>

            <form class="row" action="" method="post">
                <div class="col-md-6 search mb-4">
                    <input type="search" name="search" placeholder="Search your favourite foods...">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <div class="col-sm-4">
                    <button name="find" class="th-btn mb-3">Search</button>
                </div>
            </form>

            <div class="row gy-40 list">
                <?php foreach ($list_product as $key => $value) : ?>
                    <?php
                    $main_image = get_main_image($value['product_id'])[0]['image_path'];
                    $name_sub_category = get_name_category($value['product_id'])[0]['name_sub_category'];
                    ?>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="th-product product-grid">
                            <div class="product-img">
                                <img style="height: 16rem; object-fit: cover;" src="assets/img/product/<?= $main_image ?>" alt="Product Image">
                                <span class="product-tag">Frutin</span>
                                <div class="actions">
                                    <a href="index.php?act=shop-details&&pro=<?= $value['product_id'] ?>" class="icon-btn">
                                        <i class="far fa-eye"></i>
                                    </a>
                
                                    <a href="addWishList.php?id_pro=<?= $value['product_id'] ?>" class="icon-btn">
                                        <i class="far fa-heart"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product-content">
                                <a href="index.php?act=shop-details&&pro=<?= $value['product_id'] ?>" class="product-category">
                                    <?= $name_sub_category ?>
                                </a>
                                <h3 class="product-title"><a href="index.php?act=shop-details&&pro=<?= $value['product_id'] ?>">
                                        <?= $value['name'] ?>
                                    </a></h3><span class="price">$
                                    <?= $value['price'] ?>
                                </span>
                                <div class="woocommerce-product-rating"><span class="count">(120 Reviews)</span>
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span>Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span>
                                            customer rating</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
            <!-- <div class="th-pagination text-center pt-50">
                <ul>
                    <li><a href="blog.php">1</a></li>
                    <li><a href="blog.php">2</a></li>
                    <li><a href="blog.php">3</a></li>
                    <li><a href="blog.php"><i class="far fa-arrow-right"></i></a></li>
                </ul>
            </div> -->
        </div>
    </section>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
    document.querySelectorAll('.filter').forEach(item => {
        item.addEventListener("click", function() {
            var sub_category_id = $(this).val();
            $.ajax({
                url: "showProducts.php",
                type: "POST",
                data: {
                    sub_category_id: sub_category_id
                },
                success: function(data) {
                    $(".list").replaceWith(data);
                },
            });
        })
    })
</script>
<script>
    function filterByCategory(event) {

        //Bỏ class hidden
        var deleteClass = document.querySelectorAll('.hidden')
        if (deleteClass.length > 0) {
            deleteClass.forEach(item => {
                item.classList.remove('hidden');
            })
        }
        var category = event.innerText;

        //Lọc
        document.querySelectorAll('.product-content').forEach(item => {
            var tag = item.querySelector('a');
            if (category != tag.innerText) {
                var parentE = tag.parentElement.parentElement.parentElement;
                parentE.classList.add('hidden');
            }
        })
    }
</script>

</html>