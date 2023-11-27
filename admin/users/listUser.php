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
        <h1 class="h3 mb-2 text-gray-800"><i class="fa-solid fa-user mr-3"></i>Customers</h1>
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
        <a href="admin.php?act=addUser" class="btn btn-primary mt-2 mb-2"><i class="fa-solid fa-square-plus mr-3"></i>Add Account</a>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Category</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive pb-5">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <form action="" method="POST">
                            <thead>
                                <tr>
                                    <th>#Username</th>
                                    <th>Password</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Control</th>


                                </tr>
                            </thead>

                            <tbody>
                                <?php foreach ($list_user as $key => $value) : ?>
                                    <tr class="pb-3 pt-3">
                                        <th><?= $value['username'] ?></th>
                                        <th><?= $value['password'] ?></th>
                                        <th><?= $value['email'] ?></th>
                                        <th><?= $value['role'] ?></th>
                                        <th>
                                            <!-- Default dropend button -->
                                            <div class="dropdown">
                                                <button class="btn btn-secondary" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa-solid fa-ellipsis"></i>
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                    <a class="dropdown-item" href="admin.php?act=detailUser&&user=<?= $value['username'] ?>" type="button">More Information</a>
                                                    <button class="dropdown-item" type="button" data-toggle="modal" data-target="#exampleModalCenter_<?= $value['username'] ?>">
                                                        Delete
                                                    </button>
                                                    <a class="dropdown-item" href="users/setRole.php?user=<?= $value['username'] ?>" type="button">Set Admin</a>
                                                    <a class="dropdown-item" href="users/deleteRole.php?user=<?= $value['username'] ?>" type="button">Delete Admin</a>

                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                    <!-- Button trigger modal -->


                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter_<?= $value['username'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">Are you sure to delete user <strong><?= $value['username'] ?></strong> ?</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    Data once deleted cannot be restored

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <a type="button" href="users/deleteUser.php?username=<?= $value['username'] ?>" class="btn btn-primary">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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