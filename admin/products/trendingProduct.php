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
        <h1 class="h3 mb-2 text-gray-800">Trending</h1>
        <!-- Search -->
        <form class="d-none d-sm-inline-block form-inline mr-auto  my-2 my-md-0 mw-250 navbar-search">
            <div class="input-group mt-2 mb-2">
                <input type="text" class="form-control  border-0 " style="width: 35rem; height: 3rem" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
        <br>
        <a href="admin.php?act=addTrendingProduct" class="btn btn-primary mt-2 mb-2"><i class="fa-solid fa-square-plus mr-3"></i>Add Product Trending</a>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All trending product</h6>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>

                                <th>#ID Product</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quanlity Inventory</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list_trending as $key => $value) : ?>
                                <tr>
                                    <th><?= $value['product_id']; ?></th>
                                    <th><?= $value['name']; ?></th>
                                    <th><?= $value['price']; ?></th>
                                    <th><?= $value['sub_category_id']; ?></th>
                                    <th><a href="products/deleteTrending.php?id=<?= $value['product_id']; ?>" class="btn btn-primary"><i class="fa-solid fa-trash-can mr-2"></i>Delete</a></th>

                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


</body>

</html>