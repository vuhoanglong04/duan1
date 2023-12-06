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
        <h1 class="h3 mb-2 text-gray-800"> Variant</h1>
        <div class="row">
            <div class="card p-0 shadow mb-4 col-sm-6">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Origin</h6>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>#ID Origin</th>
                                    <th>Value</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($list_origin as $key => $value) : ?>
                                    <tr>
                                        <th><?= $value['id_origin']; ?></th>
                                        <th><?= $value['value_origin']; ?></th>
                                
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="card p-0 shadow mb-4 ml-2 col-sm-5">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Type</h6>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                                <tr>
                                    <th>#ID Type</th>
                                    <th>Value</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($list_type as $key => $value) : ?>
                                    <tr>
                                        <th><?= $value['id_type']; ?></th>
                                        <th><?= $value['value_type']; ?></th>
                                
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