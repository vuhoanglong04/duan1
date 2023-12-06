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
        <h1 class="h3 mb-2 text-gray-800">Product</h1>
        <!-- Search -->
        <form method="post" class="d-none d-sm-inline-block form-inline mr-auto  my-2 my-md-0 mw-250 navbar-search">
            <div class="input-group mt-2 mb-2">
                <input name="name_product_search" type="text" class="form-control  border-0 " style="width: 35rem; height: 3rem" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button name="search_product" class="btn btn-primary" type="submit">
                        <i class="fas fa-search fa-sm"></i>
                    </button>
                </div>
            </div>
        </form>
        <br>

        <div class="row">
            <div class="col-sm-3">
                <a href="admin.php?act=addProduct" class="btn btn-primary mt-2 mb-2"><i class="fa-solid fa-square-plus mr-3"></i>Add more product</a>
            </div>
            <div class="col-sm-4 d-flex">
                <div class="dropdown  mt-2 mb-2">
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Filter By Category
                    </a>

                    <ul class="dropdown-menu" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;" aria-labelledby="dropdownMenuLink">
                        <?php foreach ($list_sub_category as $key => $value) : ?>
                            <li><a class="dropdown-item item_category" id="<?= $value['id_sub_category'] ?>"><?= $value['name_sub_category'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <button class="btn btn-primary  mt-2 mb-2 ml-2 clear">Clear Filter</button>
            </div>
        </div>

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
                                <th>Name Product</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Id Sub Category</th>
                                <th>Image Product</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($list_product as $key => $value) : ?>
                                <tr>
                                    <th><?= $value['product_id']; ?></th>
                                    <th><?= $value['name']; ?></th>
                                    <th>$<?= $value['price']; ?></th>
                                    <th>
                                        <?php
                                        $main_image = get_main_image($value['product_id']);

                                        ?>
                                        <img width="100" height="100" style="object-fit: cover;" src="../assets/img/product/<?= $main_image[0]['image_path']; ?>" alt="Image">
                                    </th>
                                    <th><?= substr($value['desciption'], 0, 25); ?>...</th>
                                    <th class="sub_id"><?= $value['sub_category_id']; ?></th>
                                    <th><a href="admin.php?act=imageProduct&&pro=<?= $value['product_id']; ?>" class="btn btn-primary"><i class="fa-solid fa-images mr-3"></i>Image</a></th>
                                    <th><a href="products/deleteProduct.php?id=<?= $value['product_id']; ?>" class="btn btn-primary" type="submit"><i class="fa-solid fa-trash-can p-2"></i></a></th>
                                    <th><a href="../admin/admin.php?act=editProduct&&id=<?= $value['product_id']; ?>" class="btn btn-primary" type="submit"><i class="fa-solid fa-pen-to-square mr-2"></i>Edit</a></th>
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>
    let item_category = document.querySelectorAll('.item_category');
    let sub_id = document.querySelectorAll('.sub_id');

    item_category.forEach(item => {
        item.addEventListener('click', function() {
            sub_id.forEach(row => {
                if (row.parentElement.style.display = 'none') {
                    row.parentElement.style.display = 'table-row';
                }
            })
            var id = this.getAttribute('id');
            sub_id.forEach(row => {
                if (row.textContent != id) {
                    row.parentElement.style.display = 'none';
                }
            })
        })
    })
    var btnClear =document.querySelector('.clear')
    btnClear.addEventListener('click',function(){
        sub_id.forEach(row => {
                if (row.parentElement.style.display = 'none') {
                    row.parentElement.style.display = 'table-row';
                }
            })
    })
</script>
</script>

</html>