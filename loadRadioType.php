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

    <?php
    include('model/pdo.php');
    include('model/product.php');

    $product_id  = $_POST['product_id'];
    $id_origin  = $_POST['id_origin'];
    $list_type_by_origin = get_type_by_origin($product_id, $id_origin);

    ?>
    <div class="choose_type">
        <p><strong class="text-title me-3">Type:</strong></p>
        <div class="mydict">
            <div>
                <?php foreach ($list_type_by_origin as $key => $value) : ?>
                    <label>
                        <input type="radio" name="type" value="<?= $value['id_type'] ?>">
                        <span><?= $value['value_type'] ?></span>
                    </label>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</body>
<script>
    var choose_type = document.querySelector('.choose_type');
    var selectType = choose_type.querySelectorAll('input[name="type[]"]');

    function loadPrice(id_type) {
        $.ajax({
            url: "loadPrice.php",
            type: "POST",
            data: {
                product_id: <?= $product_id ?>,
                id_origin: id_origin,
                id_type: id_type
            },
            success: function(data) {

                $("#total").replaceWith(data);
            },
        });

    }

    selectType.forEach(item => {
        item.addEventListener('change', function() {
            loadPrice(this.value)
        })
    })
</script>

</html>