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
        <h1 class="h3 mb-2 text-gray-800">Category</h1>
        <p class="mb-4">All Category</p>
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

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Category</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th>Name Sub Category</th>
                                <th>Image</th>
                                <th>ID Master Category</th>
                                <th>Name Master Category</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($result as $key => $value) : ?>
                                <tr>
                                    <td><?= $value['id_sub_category']; ?></td>
                                    <td ><?= $value['name_sub_category']; ?></td>
                                    <td><img style="height: 5rem; width:5rem;" src="../assets/img/category/<?=$value['image_sub_category'];?>" alt="Image"></td>
                                    <th><?= $value['id']; ?></th>
                                    <th><?= $value['name']; ?></th>
                                    <td><a href="category/deleteSubCategory.php?id=<?=$value['id_sub_category'];?>" class="btn btn-primary mt-4" type="submit"><i class="fa-solid fa-trash-can mr-2"></i>Delete</a></td>
                                    <td><a href="../admin/admin.php?act=editSubCategory&&id=<?=$value['id_sub_category'];?>" class="btn btn-primary mt-4" type="submit"><i class="fa-solid fa-pen-to-square mr-2"></i>Edit</a></td>
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