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
        <h1 class="h3 mb-2 text-gray-800">Comment</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">All Comment</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#ID Comment</th>
                                <th>Content</th>
                                <th>Username</th>
                                <th>#ID Product</th>
                                <th>Date</th>
                                <th>Hidden</th>

                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($list_comment as $key => $value) : ?>
                                <tr>
                                    <th><?= $value['comment_id'] ?></th>
                                    <th><?= substr($value['content'], 0, 50) ?></th>
                                    <th><?= $value['username'] ?></th>
                                    <th>#<?= $value['product_id'] ?></th>
                                    <th>#<?= $value['date'] ?></th>

                                    <th>
                                        <?php
                                        if ($value['status'] == '1') {

                                            echo '
                                                <a href="comment/hiddenComment.php?id_comment=' . $value["comment_id"] . '" class="btn btn-primary" type="submit"><i class="fa-solid fa-eye-slash mr-2"></i>Hidden</a>
                                            ';
                                        } else echo '
                                                        <a href="comment/showComment.php?id_comment=' . $value["comment_id"] . '" class="btn btn-primary" type="submit"><i class="fa-regular fa-eye mr-2"></i>Show</a>
                                                    ';

                                        ?>
                                    </th>
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