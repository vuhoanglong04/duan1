<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>
    <script src="https://kit.fontawesome.com/dc265cc9f9.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
</head>

<body id="page-top">
    <style>
        <?php
        include('../../assets/css/sb-admin-2.min.css');
        ?>
    </style>
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Orders History</h1>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Orders</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive" style="padding-bottom: 150px;">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <form action="" method="POST">
                            <thead>
                                <tr>
                                    <th>#Order ID</th>
                                    <th>Customer</th>
                                    <th>Date</th>
                                    <th>Name Transport</th>
                                    <th>Coupon</th>
                                    <th>Total</th>
                                    <th>Payment Method</th>
                                    <th>Status</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($list_orders as $key => $value) : ?>
                                    <tr class="pb-3 pt-3">
                                        <th><?= $value['id_order'] ?></th>
                                        <th><?= $value['username'] ?></th>
                                        <th><?= $value['date'] ?></th>
                                        <th><?= $value['name_transport'] ?></th>
                                        <th><?= $value['code_coupon'] ?></th>
                                        <th><?= $value['total'] ?></th>
                                        <th><?= $value['payment_methods'] ?></th>
                                        <th><?= $value['status'] ?></th>

                                        <th>
                                            <!-- Default dropend button -->
                                            <div class="dropdown">
                                                <button class="btn btn-secondary" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <a class="dropdown-item" href="admin.php?act=order_detail&&id_order=<?= $value['id_order'] ?>" type="button">More Information</a>
                                                    <!-- <a class="dropdown-item" href="admin.php?act=detailUser&&user=<?= $value['id_order'] ?>" type="button">Confirm</a>
                                                    <a class="dropdown-item" href="admin.php?act=detailUser&&user=<?= $value['id_order'] ?>" type="button">Cancel</a> -->
                                                    <?php
                                                    if ($value['status'] == "Awaiting Confirmation") {
                                                        echo "
                                                                    <a class='dropdown-item' href='orders/confirmOrder.php?id_order=" . $value['id_order'] . "' type='button'>Confirm</a>
                                                                ";
                                                        echo "
                                                                <a class='dropdown-item' href='orders/cancelOrder.php?id_order=" . $value['id_order'] . "' type='button'>Cancel Order</a>
                                                                ";
                                                    } else if ($value['status'] == "In transit") {
                                                  
                                                        echo "
                                                                <a class='dropdown-item' href='orders/cancelOrder.php?id_order=" . $value['id_order'] . "' type='button'>Cancel</a>
                                                            ";
                                                        echo "
                                                            <a class='dropdown-item' href='orders/doneOrder.php?id_order=" . $value['id_order'] . "' type='button'>Done</a>
                                                        ";
                                                    }
                                                    ?>

                                                </div>
                                            </div>
                                        </th>
                                    </tr>

                                <?php endforeach; ?>
                            </tbody>
                        </form>
                    </table>
                </div>
            </div>
        </div>

    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</html>