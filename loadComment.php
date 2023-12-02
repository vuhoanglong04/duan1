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
<?php
include('model/comment.php');
include('model/pdo.php');
include('model/user.php');

$product_id = $_GET['product_id'];
$date = date('Y-m-d H:i:s');
$username ="";
if(isset($_COOKIE['username'])){
    $username  = $_COOKIE['username'];
}
if (isset($_POST['post_review'])) {
    $content = $_POST['content'];
    add_comment($content, $username, $product_id, $date);
}
$list_comment = get_list_comment($product_id);
print_r($list_comment);
?>
<style>
    .th-comment-form {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;

    }
    body{
        height: auto;
    }
    body::-webkit-scrollbar {
        width: 8px;
        /* Chiều rộng của thanh cuộn */
    }

    body::-webkit-scrollbar-thumb {
        background-color: #FFEFE8;
        /* Màu của phần nút cuộn */
        border-radius: 25px;
        /* Độ cong của phần nút cuộn */
        /* border: 2px solid #aaa; */
        /* Border của phần nút cuộn */
    }

    body::-webkit-scrollbar-track {
        background-color: transparent;
        /* Màu của phần track cuộn */
    }

    /* Optional: Hiệu ứng hover cho thanh cuộn */
    body::-webkit-scrollbar-thumb:hover {
        background-color: #FFEFE8;
        /* Màu khi hover */
    }

    /* Optional: Hiệu ứng khi cuộn trang */
    body::-webkit-scrollbar-button {
        display: none;
        /* Ẩn nút cuộn khi cuộn trang */
    }

    /* Optional: Đặt kích thước tối thiểu cho thanh cuộn */
    body::-webkit-scrollbar {
        min-width: 8px;
        min-height: 8px;
    }
    .woocommerce-Reviews{
        margin-bottom: 400px;
    }
</style>

<body>
    <div class="woocommerce-Reviews container-fluid">
        <div class="th-comments-wrap">
            <ul class="mb-3 pb-3" style="list-style: none;">
                <?php foreach ($list_comment as $key => $value) : ?>
                    <li class="review th-comment-item">
                        <div class="th-post-comment">
                            <div class="comment-avater"><img src="assets/img/user/<?=get_user($value['username'])[0]['image']?>" alt="Comment Author"></div>
                            <div class="comment-content">
                                <h4 class="name"><?=get_user($value['username'])[0]['full_name']?></h4><span class="commented-on"><i class="far fa-calendar"></i><?=$value['date'] ?></span>
                              
                                <p class="text"><?=$value['content'] ?></p>
                            </div>
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
        <div class="th-comment-form" style="margin: 0">
            <form method="post">
                <div class="form-title">
                    <h3 class="blog-inner-title">Add a review</h3>
                </div>
                <div class="col-12 form-group"><textarea placeholder="Write a Message" name="content" class="form-control mb-2"></textarea></div>
                <div class="col-12 form-group mb-0"><button name="post_review" class="th-btn">Post Review</button></div>
            </form>
        </div>
    </div>
    </div>
</body>


</html>