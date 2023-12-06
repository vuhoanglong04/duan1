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
        ?>.card {
            margin: auto;
            width: 38%;
            max-width: 600px;
            padding: 4vh 0;
            box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            border-top: 3px solid #4e73df;
            border-bottom: 3px solid #4e73df;
            border-left: none;
            border-right: none;
        }

        @media(max-width:768px) {
            .card {
                width: 90%;
            }
        }

        .title {
            color: #4e73df;
            font-weight: 600;
            margin-bottom: 2vh;
            padding: 0 8%;
            font-size: initial;
        }

        #details {
            font-weight: 400;
        }

        .info {
            padding: 5% 8%;
        }

        .info .col-5 {
            padding: 0;
        }

        #heading {
            color: grey;
            line-height: 6vh;
        }

        .pricing {
            background-color: #ddd3;
            padding: 2vh 8%;
            font-weight: 400;
            line-height: 2.5;
        }

        .pricing .col-3 {
            padding: 0;
        }

        .total {
            padding: 2vh 8%;
            color: #4e73df;
            font-weight: bold;
        }

        .total .col-3 {
            padding: 0;
        }

        .footer {
            padding: 0 8%;
            font-size: x-small;
            color: black;
        }

        .footer img {
            height: 5vh;
            opacity: 0.2;
        }

        .footer a {
            color: #4e73df;
        }

        .footer .col-10,
        .col-2 {
            display: flex;
            padding: 3vh 0 0;
            align-items: center;
        }

        .footer .row {
            margin: 0;
        }

        #progressbar {
            margin-bottom: 3vh;
            overflow: hidden;
            color: #4e73df;
            padding-left: 0px;
            margin-top: 3vh
        }

        #progressbar li {
            list-style-type: none;
            font-size: small;
            width: 25%;
            float: left;
            position: relative;
            font-weight: 700;
            color: rgb(160, 159, 159);
        }

        #progressbar #step1:before {
            content: "";
            color: #4e73df;
            width: 5px;
            height: 5px;
            margin-left: 0px !important;
            /* padding-left: 11px !important */
        }

        #progressbar #step2:before {
            content: "";
            color: #fff;
            width: 5px;
            height: 5px;
            margin-left: 32%;
        }

        #progressbar #step3:before {
            content: "";
            color: #fff;
            width: 5px;
            height: 5px;
            margin-right: 32%;
            /* padding-right: 11px !important */
        }

        #progressbar #step4:before {
            content: "";
            color: #fff;
            width: 5px;
            height: 5px;
            margin-right: 0px !important;
            /* padding-right: 11px !important */
        }

        #progressbar li:before {
            line-height: 29px;
            display: block;
            font-size: 12px;
            background: #ddd;
            border-radius: 50%;
            margin: auto;
            z-index: -1;
            margin-bottom: 1vh;
        }

        #progressbar li:after {
            content: '';
            height: 2px;
            background: #ddd;
            position: absolute;
            left: 0%;
            right: 0%;
            margin-bottom: 2vh;
            top: 1px;
            z-index: 1;
        }

        .progress-track {
            padding: 0 8%;
        }

        #progressbar li:nth-child(2):after {
            margin-right: auto;
        }

        #progressbar li:nth-child(1):after {
            margin: auto;
        }

        #progressbar li:nth-child(3):after {
            float: left;
            width: 68%;
        }

        #progressbar li:nth-child(4):after {
            margin-left: auto;
            width: 132%;
        }

        #progressbar li.active {
            color: black;
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #4e73df;
        }
    </style>

    <div class="container-fluid">
        <h1 class="h3 mb-2 text-gray-800">Orders History</h1>
        <a href="admin.php?act=orderHistory" class="btn btn-primary mt-2 mb-2">Back to order history</a>

        <div class="container-fluid shadow p-0 mb-3">
            <div class="card detail">
                <div class="info pt-4 pb-4">
                    <div class="row">
                        <div class="col-7">
                            <strong>Date</strong><br>
                            <span><?= $get_order[0]['date'] ?></span>
                        </div>
                        <div class="col-5 pull-right">
                            <strong>Order No.</strong><br>
                            <span>#<?= $get_order[0]['id_order'] ?></span>
                        </div>
                    </div>
                </div>
                <div class="info pt-4 pb-4">
                    <div class="row">
                        <div class="col-7">
                            <strong>Address</strong><br>
                            <span><?= $get_user[0]['address'] ?></span>
                        </div>
                        <div class="col-5 pull-right">
                            <strong>Email</strong><br>
                            <span><?= $get_user[0]['email'] ?></span>
                            <br>
                            <strong>Telephone</strong><br>
                            <span><?= $get_user[0]['telephone'] ?></span>
                        </div>
                    </div>
                </div>
                <div class="info pt-4 pb-4">
                    <div class="row">
                        <div class="col-7">
                            <strong>Transport</strong><br>
                            <span><?= $get_order[0]['name_transport'] ?></span><br>
                            <br>
                            <strong>Payment Method</strong><br>
                            <span><?= $get_order[0]['payment_methods'] ?></span><br>
                            
                        </div>

                    </div>
                </div>

                <div class="total">
                    <div class="row">

                        <div class="col-4"><big>$<?= $get_order[0]['total'] ?>.00</big></div>
                    </div>
                </div>
                <div class="tracking" >
                    <div class="title" <?php if($get_order[0]['status']=="Cancelled") echo 'style="color:red"' ?>>Tracking Order (<?= $get_order[0]['status'] ?>)</div>
                </div>
                <div class="progress-track">
                    <ul id="progressbar">
                        <li class="step0 <?php if($get_order[0]['status']=="In transit" ||  $get_order[0]['status']=="Received" ) echo"active"; ?>  " id="step1">Awaiting Confirmation</li>
                        <li class="step0  <?php if( $get_order[0]['status']=="In transit" ||  $get_order[0]['status']=="Received") echo"active"; ?>  text-center" id="step2">In transit</li>
                        <li class="step0  <?php if(  $get_order[0]['status']=="Received") echo"active"; ?>  text-center" id="step3">Received</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Page Heading -->

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Orders</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <form action="" method="POST">
                            <thead>
                                <tr>
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
                                <?php foreach ($order as $key => $value) : ?>
                                    <tr class="pb-3 pt-3">
                                        <th><?= $value['id_order_detail'] ?></th>
                                        <th><?= $value['order_id'] ?></th>
                                        <th><?= $value['id_product_variant'] ?></th>
                                        <th><?= $value['id_origin'] ?></th>
                                        <th><?= $value['id_type'] ?></th>
                                        <th><?= $value['quanlity'] ?></th>
                                        <th>$<?= $value['price'] ?></th>
                                        <th>$<?= $value['total'] ?></th>


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