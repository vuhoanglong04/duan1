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
    <style>
        body {
            background: #eee;
        }

        .card {
            box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid rgba(0, 0, 0, .125);
            border-radius: 1rem;
        }

        .text-reset {
            --bs-text-opacity: 1;
            color: inherit !important;
        }

        a {
            color: #5465ff;
            text-decoration: none;
        }
    </style>
    <h3 class=" mt-5" style="text-align: center;">Order Detail #<?= $id_order ?></h3>
    <div class="container">

        <div class="container p-0">
            <!-- Title -->


            <!-- Main content -->
            <div class="row">
                <div class="col-lg-8">
                    <!-- Details -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mb-3 d-flex justify-content-between">
                                <div>
                                    <span class="me-3"><?= $full_order[0]['date'] ?></span>
                                    <span class="me-3">#<?= $full_order[0]['id_order'] ?></span>
                                    <span class="me-3"><?= $full_order[0]['status'] ?></span>
                                </div>
                                <div class="d-flex">

                                    <div class="dropdown">
                                        <button class="btn btn-link p-0 text-muted" type="button" data-bs-toggle="dropdown">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-pencil"></i> Edit</a></li>
                                            <li><a class="dropdown-item" href="#"><i class="bi bi-printer"></i> Print</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <table class="table table-borderless">
                                <tbody>
                                    <?php foreach ($order as $key => $value) : ?>
                                        <tr>
                                            <td>
                                                <div class="d-flex mb-2">
                                                    <div class="flex-shrink-0">
                                                        <img style='object-fit: cover;' src="./assets/img/product/<?= $value['image_path'] ?>" alt="" width="35" class="img-fluid">
                                                    </div>
                                                    <div class="flex-lg-grow-1 ms-3">
                                                        <h6 class="small mb-0 mt-2 mb-2"><a href="index.php?act=shop-details&&pro=<?=$value['id_product'] ?>" class="text-reset"><?= $value['name'] ?>   <span style='font-weight: 300;'>(<?=$value['value_origin'] ?> - <?=$value['value_type'] ?>)</span></a></h6>

                                                    </div>
                                                </div>
                                            </td>
                                            <td class="mt-2">x<?= $value['quanlity'] ?></td>
                                            <td class="text-end ">$<?= $value['total'] ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                                <tfoot>

                                    <tr>
                                        <td colspan="2">Shipping</td>
                                        <td class="text-end"><?= $full_order[0]['name_transport'] ?> ($<?= $full_order[0]['fee'] ?>)</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Discount </td>
                                        <td class="text-danger text-end"><?= $full_order[0]['code_coupon'] ?></td>
                                    </tr>
                                    <tr class="fw-bold">
                                        <td colspan="2">TOTAL</td>
                                        <td class="text-end">$<?= $full_order[0]['total'] ?>.00</td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- Payment -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3 class="h6">Payment Method</h3>
                                    <p><?= $full_order[0]['payment_methods'] ?></p>
                                </div>
                                <div class="col-lg-6">
                                    <h3 class="h6">Billing address</h3>
                                    <address>
                                        <strong><?= $user[0]['full_name'] ?></strong><br>
                                        <?= $user[0]['address'] ?><br>

                                        <?= $user[0]['telephone'] ?>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <!-- Customer Notes -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="h6">Customer Notes</h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <!-- Shipping information -->
                        <div class="card-body">
                            <h3 class="h6">Shipping Information</h3>
                            <strong><?= $full_order[0]['name_transport'] ?></strong>
                            <hr>
                            <h3 class="h6">Address</h3>
                            <address>
                                <strong><?= $user[0]['full_name'] ?></strong><br>
                                <?= $user[0]['address'] ?><br>

                                <?= $user[0]['telephone'] ?>
                            </address>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <table class="table table-borderless main col-sm-12">
            <thead>
                <tr class="head">
                    <th scope="col">#ID Order Detail</th>
                    <th scope="col">#ID Order</th>
                    <th scope="col">#ID Product Variant</th>
                    <th scope="col">#ID Origin</th>
                    <th scope="col">#ID Type</th>
                    <th scope="col">Quanlity</th>
                    <th scope="col">Price</th>
                    <th scope="col">Total</th>
                </tr>
            </thead>
            <tbody>
                <form action="" method="post">
                    <?php foreach ($order as $key => $value) : ?>
                        <tr class="rounded bg-white">
                            <td class="order-color">#<?= $value['id_order_detail'] ?></td>
                            <td><?= $value['order_id'] ?></td>
                            <td>
                                <?= $value['id_product_variant'] ?>
                            </td>
                            <td><?= $value['id_origin'] ?></td>
                            <td>$<?= $value['id_type'] ?></td>
                            <td><?= $value['quanlity'] ?></td>
                            <td>$
                                <?= $value['price'] ?>
                            </td>
                            <td>
                                $<?= $value['total'] ?>
                            </td>


                        </tr>
                    <?php endforeach; ?>
                </form>
            </tbody>
        </table>


    </div>
</body>


</html>