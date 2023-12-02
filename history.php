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
    <h3 class=" mt-5" style="text-align: center;">Your Orders</h3>
    <div class="container">

        <table class="table table-borderless main col-sm-12">
            <thead>
                <tr class="head">
                    <th scope="col">#Order ID</th>
                    <th scope="col">Date</th>
                    <th scope="col">Name Transport</th>
                    <th scope="col">Coupon</th>
                    <th scope="col">Total</th>
                    <th scope="col">Payment Method</th>
                    <th scope="col">Status</th>
                    <th scope="col">Detail</th>

                </tr>
            </thead>
            <tbody>
                <form action="" method="post">
                    <?php foreach ($list_order as $key => $value) : ?>
                        <tr class="rounded bg-white">
                            <td class="order-color">#<?= $value['id_order'] ?></td>
                            <td><?= $value['date'] ?></td>

                            <td>
                                <?= $value['name_transport'] ?>
                            </td>
                            <td><?= $value['code_coupon'] ?></td>
                            <td>$<?= $value['total'] ?></td>
                            <td><?= $value['payment_methods'] ?></td>
                            <td>

                                <?php
                                if ($value['status'] == "Awaiting Confirmation") {
                                    echo "Awaiting Confirmation....";
                                } else if ($value['status'] == "In transit") {
                                    echo "In Transit...";
                                } else if($value['status'] == "Received") {
                                    echo "<button dis class='btn btn-success' name='received'><i class='fa-regular fa-calendar-check m-2'></i>Received</button>";
                                }
                                else echo "Cancelled";
                                ?>

                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <a class="dropdown-item" href="index.php?act=detail_order&&id_order=<?= $value['id_order'] ?>" type="button">More Detail</a>
                                        <?php
                                        if ($value['status'] == "Awaiting Confirmation") {
                                            echo "<a  href='cancelOrder.php?id_order=".$value['id_order'] ."' class='dropdown-item' name='cancel_order'><i class='fa-solid fa-ban m-1'></i>Cancel Order</a>";
                                        }
                                        if ($value['status'] == "In transit") {
                                            echo "<a  href='receivedOrder.php?id_order=".$value['id_order'] ."' class='dropdown-item' name='cancel_order'>Received</a>";
                                        }
                                        ?>
                                    </div>
                                </div>
                            </td>


                        </tr>
                    <?php endforeach; ?>
                </form>
            </tbody>
        </table>


    </div>
</body>


</html>