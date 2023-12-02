<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin Dashboard</title>

    <!-- Custom fonts for this template-->
    <script src="https://kit.fontawesome.com/dc265cc9f9.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>


<body id="page-top">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Statistical</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Total Revenue</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$<?= $totalAll ?>.00</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Earnings (Month)</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">$<?= $totalMonth ?>.00</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Orders
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $countOrder ?></div>
                                    </div>
                                    <div class="col">
                                        <div class="progress progress-sm mr-2">
                                            <div class="progress-bar bg-info" role="progressbar" style="width: <?= $countOrder / 100 ?>%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                    Comments</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $countComment ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-comments fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="row">

            <div class="col-sm-6">
                <h3 class="h4 mb-2 text-gray-800">User</h3>

                <div class="table-responsive" style="background-color: white;height:300px;overflow: scroll;">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list_user as $key => $value) : ?>
                                <tr>
                                    <th><?= $value['username']; ?></th>
                                    <th><?= $value['email']; ?></th>
                                    <th><?= $value['role']; ?></th>

                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-6">
                    <h3 class="h4 mb-2 text-gray-800">User Activities</h3>

                    <div class="table-responsive" style="background-color: white;height:300px;overflow: hidden; width:35rem">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>User Activities</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($new_comment as $key => $value) : ?>
                                    <tr>
                                        <th><strong><?= $value['username']; ?></strong> comment on product : <a href="../index.php?act=shop-details&&pro=<?= $value['product_id']; ?>"><?= $value['name']; ?></a></th>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-12">
                <div class="col-sm-12">
                    <h3 class="h4 mb-2 text-gray-800" >Sold Out Products</h3>

                    <div class="table-responsive" style="background-color: white;height:300px;overflow: scroll; width:100%">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#ID Product Variant</th>
                                    <th>#ID Product</th>
                                    <th>#ID Origin</th>
                                    <th>#ID Type</th>
                                    <th>Name</th>
                                    <th>Sold Quantity</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($sold_out as $key => $value) : ?>
                                    <tr>
                                        <th><?= $value['id_product_variant']?></th>
                                        <th><?= $value['product_id']?></th>
                                        <th><?= $value['id_origin']?></th>
                                        <th><?= $value['id_type']?></th>
                                        <th><?= $value['name']?></th>
                                        <th style="color:green"><?= $value['quanlity']?></th>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>