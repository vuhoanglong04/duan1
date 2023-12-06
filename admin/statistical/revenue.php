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
        ?>body {
            margin-top: 20px;
            background-color: #f7f7ff;
        }

        .radius-10 {
            border-radius: 10px !important;
        }

        .border-info {
            border-left: 5px solid #0dcaf0 !important;
        }

        .border-danger {
            border-left: 5px solid #fd3550 !important;
        }

        .border-success {
            border-left: 5px solid #15ca20 !important;
        }

        .border-warning {
            border-left: 5px solid #ffc107 !important;
        }


        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0px solid rgba(0, 0, 0, 0);
            border-radius: .25rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 2px 6px 0 rgb(218 218 253 / 65%), 0 2px 6px 0 rgb(206 206 238 / 54%);
        }

        .bg-gradient-scooter {
            background: #17ead9;
            background: -webkit-linear-gradient(45deg, #17ead9, #6078ea) !important;
            background: linear-gradient(45deg, #17ead9, #6078ea) !important;
        }

        .widgets-icons-2 {
            width: 56px;
            height: 56px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ededed;
            font-size: 27px;
            border-radius: 10px;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .text-white {
            color: #fff !important;
        }

        .ms-auto {
            margin-left: auto !important;
        }

        .bg-gradient-bloody {
            background: #f54ea2;
            background: -webkit-linear-gradient(45deg, #f54ea2, #ff7676) !important;
            background: linear-gradient(45deg, #f54ea2, #ff7676) !important;
        }

        .bg-gradient-ohhappiness {
            background: #00b09b;
            background: -webkit-linear-gradient(45deg, #00b09b, #96c93d) !important;
            background: linear-gradient(45deg, #00b09b, #96c93d) !important;
        }

        .bg-gradient-blooker {
            background: #ffdf40;
            background: -webkit-linear-gradient(45deg, #ffdf40, #ff8359) !important;
            background: linear-gradient(45deg, #ffdf40, #ff8359) !important;
        }
    </style>
    <div class="container-fluid">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />


        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4">
            <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-info">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">Total Revenue</p>
                                <h4 class="my-1 text-info">$<?= $totalAll ?>.00</h4>
                                <p class="mb-0 font-13">All time</p>
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-scooter text-white ms-auto"><i class="fa fa-shopping-cart"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card radius-10 border-start border-0 border-3 border-danger">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div>
                                <p class="mb-0 text-secondary">This Month</p>
                                <h4 class="my-1 text-danger">+$<?= $totalMonth ?>.00</h4>
                                <p class="mb-0 font-13">+<?= round($totalMonth / $totalAll * 100) ?>%</p>
                            </div>
                            <div class="widgets-icons-2 rounded-circle bg-gradient-bloody text-white ms-auto"><i class="fa fa-dollar"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <form class="input-group mb-3 col-sm-4 p-0" method="post">
            <input type="month" name='time' min='2020-01' class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            <button type="submit" name="filter" class="btn btn-primary" id="inputGroup-sizing-default">Search</button>

        </form>
        <h5 class="mt-2 font-weight-bold" style="color:#4D73DF"> <?php if($total!="")echo "Revenue: + $".$total; ?></h5>



        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Orders Received</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <form action="" method="POST">
                            <thead>
                                <tr>
                                    <th>#Order ID</th>
                                    <th>Date</th>
                                    <th>Total</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($list_orders as $key => $value) : ?>
                                    <tr class="pb-3 pt-3">
                                        <th><?= $value['id_order'] ?></th>
                                        <th><?= $value['date'] ?></th>
                                        <th>+ $<?= $value['total'] ?></th>
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