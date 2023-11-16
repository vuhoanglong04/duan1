<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">


    <title>account setting or edit profile - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/dc265cc9f9.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <style type="text/css">
        body {
            margin: 0;

            color: #2e323c;
            background: #f5f6fa;
            position: relative;
            height: 100%;
        }

        .account-settings .user-profile {
            margin: 0 0 1rem 0;
            padding-bottom: 1rem;
            text-align: center;
        }

        .account-settings .user-profile .user-avatar {
            margin: 0 0 1rem 0;
        }

        .account-settings .user-profile .user-avatar img {
            width: 90px;
            height: 90px;
            -webkit-border-radius: 100px;
            -moz-border-radius: 100px;
            border-radius: 100px;
        }

        .account-settings .user-profile h5.user-name {
            margin: 0 0 0.5rem 0;
        }

        .account-settings .user-profile h6.user-email {
            margin: 0;
            font-size: 0.8rem;
            font-weight: 400;
            color: #9fa8b9;
        }

        .account-settings .about {
            margin: 2rem 0 0 0;
            text-align: center;
        }

        .account-settings .about h5 {
            margin: 0 0 15px 0;
            color: #007ae1;
        }

        .account-settings .about p {
            font-size: 0.825rem;
        }

        .form-control {
            border: 1px solid #cfd1d8;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            font-size: .825rem;
            background: #ffffff;
            color: #2e323c;
        }

        .card {
            background: #ffffff;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            border: 0;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body>
    <?php
    include('../../model/category.php');
    include('../../model/pdo.php');

    $id_category = $_POST['id_category'];
    $result = get_sub_category_by_id_category($id_category);

    ?>

    <div id="sub" method="post">
        <select class="form-select form-select-sm btn btn-primary text-left mb-4" name="select_sub" id="select_sub" aria-label=".form-select-sm example">
            <option value="" select hidden>Choose Sub Category</option>
            <?php foreach ($result as $key => $value) : ?>
                <option value="<?= $value['id_sub_category']; ?>"><?= $value['name_sub_category']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</body>

</html>