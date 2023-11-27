<?php
ob_start();
if (isset($_COOKIE['username_admin']) && isset($_COOKIE['password_admin'])) {
} else {
    header('location: ../loginAdmin.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Frutin Admin</title>

    <!-- Custom fonts for this template-->
    <script src="https://kit.fontawesome.com/dc265cc9f9.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
                <div class="sidebar-brand-text mx-3">Frutin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fa-solid fa-bars"></i>
                    <span>Category</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="admin.php?act=listCategory">List Category</a>
                        <a class="collapse-item" href="admin.php?act=listSubCategory">List Sub Category</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa-solid fa-bowl-food"></i>
                    <span>Products</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="admin.php?act=listProduct">List Products</a>
                        <a class="collapse-item" href="admin.php?act=listProductVariant">List Products Variant</a>
                        <a class="collapse-item" href="admin.php?act=trendingProduct">Trending Products</a>

                    </div>
                </div>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fa-solid fa-user"></i>
                    <span>Customers</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="admin.php?act=listCustomer">List Customers</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseComment" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa-solid fa-comment"></i>
                    <span>Users Activities</span>
                </a>
                <div id="collapseComment" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="admin.php?act=listComment">List Comment</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOrders" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fa-solid fa-bars-staggered"></i>
                    <span>Orders</span>
                </a>
                <div id="collapseOrders" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="">Orders History</a>
                    </div>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="admin.php?act=table">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="assets/img/undraw_profile_1.svg" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="assets/img/undraw_profile_2.svg" alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="assets/img/undraw_profile_3.svg" alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_COOKIE['username_admin']  ?></span>
                                <img class="img-profile rounded-circle" src="assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="../index.php?act=">
                                    Back To Store

                                    <i class="fa-solid fa-hand-back-fist fa-sm fa-fw mr-2 text-gray-400"></i>

                                </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    Logout
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>

                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <?php
                include('../model/pdo.php');
                include('../model/user.php');
                include('../model/category.php');
                include('../model/product.php');

                if (isset($_GET["act"])) {
                    $act = $_GET["act"];
                    switch ($act) {

                        case "addCategory":
                            if (isset($_POST["cancel"])) {
                                header("Location: admin.php?act=listCategory");
                            }
                            if (isset($_POST['add_category'])) {
                                $name_category = $_POST['name_category'];
                                add_category($name_category);
                                echo "<script>alert('Success!!!')</script>";
                                header("Location: admin.php?act=listCategory");
                            }
                            include('category/addCategory.php');
                            break;
                        case "addSubCategory":
                            $list_category = load_all_category();
                            if (isset($_POST["cancel"])) {
                                header("Location: admin.php?act=listSubCategory");
                            }
                            if (isset($_POST['add_sub_category'])) {
                                $name_sub_category = $_POST['name_sub_category'];
                                $select = $_POST['select'];
                                add_sub_category($name_sub_category, $select);
                                echo "<script>alert('Success!!!')</script>";
                                header("Location: admin.php?act=listSubCategory");
                            }
                            include('category/addSubCategory.php');
                            break;
                        case "listCategory":
                            $list_category = load_all_category();
                            include('category/listCategory.php');
                            break;
                        case 'listSubCategory':
                            $list_sub_category = load_all_sub_category();
                            include('category/listSubCategory.php');
                            break;
                        case 'editCategory':
                            $id_category = $_GET['id'];
                            $result = get_category($id_category);
                            print_r($result);
                            if (isset($_POST["cancel"])) {
                                header("Location: admin.php?act=listCategory");
                            }
                            if (isset($_POST["edit_category"])) {
                                $name_category = $_POST['name_category'];
                                edit_category($id_category, $name_category);
                                echo "<script>alert('Success!!!')</script>";
                                header("Location: admin.php?act=listCategory");
                            }
                            include('category/editCategory.php');
                            break;
                        case 'editSubCategory':
                            $id_sub_category = $_GET['id'];
                            $list_category = load_all_category();
                            $result = get_sub_category($id_sub_category);
                            print_r($list_category);
                            if (isset($_POST["cancel"])) {
                                header("Location: admin.php?act=listSubCategory");
                            }
                            if (isset($_POST["edit_sub_category"])) {
                                $name_sub_category = $_POST['name_sub_category'];
                                $select = $_POST['select'];
                                edit_sub_category($id_sub_category, $name_sub_category, $select);
                                echo "<script>alert('Success!!!')</script>";
                                header("Location: admin.php?act=listSubCategory");
                            }
                            include('category/editSubCategory.php');
                            break;
                        case "listProduct":
                            $list_product = load_all_product();
                            include('products/listProduct.php');
                            break;
                        case "addProduct":
                            $list_category = load_all_category();
                            print_r($list_category);
                            if (isset($_POST["cancel"])) {
                                header("Location: admin.php?act=listProduct");
                            }
                            if (isset($_POST['add_product'])) {
                                $name_product = $_POST['name_product'];
                                $price = $_POST['price'];
                                $description = $_POST['description'];
                                $id_sub_category = $_POST['select_sub'];
                                add_product($name_product, $price, $description, $id_sub_category);
                                header("Location: admin.php?act=listProduct");
                            }
                            include('products/addProduct.php');
                            break;
                        case "editProduct":
                            $product_id = $_GET['id'];
                            $list_category = load_all_category();
                            $product = get_product($product_id);
                            if (isset($_POST["cancel"])) {
                                header("Location: admin.php?act=listProduct");
                            }
                            if (isset($_POST['edit_product'])) {
                                $name_product = $_POST['name_product'];
                                $price = $_POST['price'];
                                $description = $_POST['description'];
                                $id_sub_category = $_POST['select_sub'];
                                update_product($product_id, $name_product, $price, $description, $id_sub_category);
                                header("Location: admin.php?act=listProduct");
                            }
                            include('products/editProduct.php');
                            break;

                        case "imageProduct":
                            $id = $_GET['pro'];
                            $name = get_product($id)[0]['name']; //Name product

                            $list_img_product = get_list_img_product($id);
                            // print_r($list_img_product);
                            if (isset($_POST["cancel"])) {
                                header("Location: admin.php?act=listProduct");
                            }
                            if (isset($_POST['add_image'])) {
                                $image = $_FILES['image'];
                                $lenght =  count($image['size']);
                                for ($i = 0; $i < $lenght; $i++) {
                                    $img_name = $image['name'][$i];
                                    $tmp = $image['tmp_name'][$i];
                                    $move  = '../assets/img/product/' . $img_name;
                                    move_uploaded_file($tmp, $move);
                                    $sql = "INSERT INTO `product_image`(`product_id`, `image_path`) VALUES ('$id','$img_name')";
                                    pdo_execute($sql);
                                }
                                header("Refresh:0");
                            }
                            include('products/imageProduct.php');
                            break;
                        case "listProductVariant":
                            $list_product_variant = load_all_product_variant();
                            include('products/listProductVariant.php');
                            break;
                        case "trendingProduct":
                            include('products/trendingProduct.php');
                            break;
                        case "addVariant":
                            $list_sub_category = load_all_sub_category();
                            $list_origin = load_all_origin();
                            $list_type = load_all_type();
                            if (isset($_POST['add_variant'])) {
                                $id_product = $_POST['id_product'];
                                $id_origin = $_POST['id_origin'];
                                $id_type = $_POST['id_type'];
                                $price = $_POST['price'];
                                $quanlity_inventory = $_POST['quanlity_inventory'];
                                add_product_variant($id_product[0], $id_origin, $id_type, $price, $quanlity_inventory);
                                echo "<script>alert('SUCCESS!!!')</script>";
                                header("Location: admin.php?act=listProductVariant");
                            }

                            include('products/addVariant.php');
                            break;
                        case "editVariant":
                            $list_sub_category = load_all_sub_category();
                            $list_origin = load_all_origin();
                            $list_type = load_all_type();
                            $id = $_GET['id'];
                            $product_variant = get_product_variant($id);
                            if (isset($_POST['add_variant'])) {
                                $id_origin = $_POST['id_origin'];
                                $id_type = $_POST['id_type'];
                                $price = $_POST['price'];
                                $quanlity_inventory = $_POST['quanlity_inventory'];
                                edit_product_variant($product_variant[0]['id_product_variant'], $id_origin, $id_type, $price, $quanlity_inventory);
                                echo "<script>alert('SUCCESS!!!')</script>";
                                // header("Refresh:0");
                                header("Location: admin.php?act=listProductVariant");
                            }
                            include('products/editVariant.php');
                            break;
                        case "listCustomer":
                            $list_user = load_all_user();
                            include('users/listUser.php');
                            break;
                        case "detailUser":
                            $username = $_GET['user'];
                            $main_user = get_user($username);
                            if (isset($_POST['change_avt'])) {
                                $avt = $_FILES['avt']['name'];
                                $tmp = $_FILES['avt']['tmp_name'];
                                $move  = '../assets/img/user/' . $avt;
                                if ($_FILES['avt']['size'] > 0) {
                                    move_uploaded_file($tmp, $move);
                                    update_avatar($username,  $avt);
                                    header("Refresh:0");
                                } else echo "<script>alert('Empty image')</script>";
                            }
                            if (isset($_POST['save'])) {
                                $full_name = $_POST['full_name'];
                                $password = $_POST['password'];
                                $email = $_POST['email'];
                                $address = $_POST['address'];
                                $telephone =  $_POST['telephone'];
                                admin_change_user($username, $full_name, $password, $email, $address, $telephone);
                                echo "<script>alert('Success!!!')</script>";
                                header("Refresh:0");
                            }
                            include('users/detailUser.php');
                            break;
                        case "addUser":
                            if (isset($_POST["cancel"])) {
                                header("Location: admin.php?act=listCustomer");
                            }
                            if (isset($_POST["create_account"])) {
                                $email = $_POST['email'];
                                $username = $_POST['username'];
                                $password = $_POST['password'];
                                sign_up($email, $username, $password);
                                header("Location: admin.php?act=listCustomer");
                            }
                            include('users/addUser.php');
                            break;
                        case "listComment":
                            include('comment/listComment.php');
                            break;
                        default:
                            include('dashboard.php');
                    }
                } else {
                    include('dashboard.php');
                }


                ?>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Frutin-PH38689</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>

</body>

</html>