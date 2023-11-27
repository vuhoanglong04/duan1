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

        label {
            font-weight: 700;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row gutters">
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">Add Variant</h6>
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label for="category">Category</label><br>
                                        <select name="id_subcategory" id="sub_category" style="font-weight:650;border:3px solid #ccc" class="btn text-left">
                                            <option value="" selected hidden>Choose Category</option>
                                            <?php foreach ($list_sub_category as $key => $value) : ?>
                                                <option value="<?= $value['id_sub_category'] ?>"><?= $value['name_sub_category'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <div id="load">
                                        <label for="product">Product</label><br>
                                        <input type="text" class="form-control" name="product" disabled>

                                    </div>
                                </div>
                                <div class="row pl-3">
                                    <div class="form-group col-sm-3">
                                        <label for="origin">Origin</label><br>
                                        <select name="id_origin" id="origin" style="font-weight:650;border:3px solid #ccc" class="btn text-left">
                                            <?php foreach ($list_origin as $key => $value) : ?>
                                                <option value="<?= $value['id_origin'] ?>"><?= $value['value_origin'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="type">Type</label><br>
                                        <select name="id_type" id="type" style="font-weight:650;border:3px solid #ccc" class="btn text-left">
                                            <?php foreach ($list_type as $key => $value) : ?>
                                                <option value="<?= $value['id_type'] ?>"><?= $value['value_type'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4 justify-content-between">
                                    <div class="form-group">
                                        <label for="type">Price($)</label><br>
                                        <input type="text" class="form-control" name="price" placeholder="...">
                                    </div>
                                    <div class="form-group">
                                        <label for="type">Quanlity Inventory</label><br>
                                        <input type="text" class="form-control" name="quanlity_inventory" placeholder="...">
                                    </div>
                                </div>


                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="text-right">
                                            <button type="submit" id="submit" name="add_variant" class="btn btn-primary">Add Product Variant</button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    $("#sub_category").change(function() {
        var category_id = $(this).val();
        $.ajax({
            url: "products/loadProduct.php",
            type: "POST",
            data: {
                category_id: category_id
            },
            success: function(data) {
                $("#load").replaceWith(data);
            },
        });

    });
</script>

</html>