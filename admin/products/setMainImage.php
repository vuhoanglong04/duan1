<?php
include '../../model/product.php';
include '../../model/pdo.php';
$id_image = $_GET['id_image'];
$id_product = $_GET['pro'];
set_main_image($id_image);
$sql = "UPDATE `product_image` SET `main`='0' WHERE `product_id`='$id_product' AND `id_image` != '$id_image'";
pdo_execute($sql);
header('location: ../admin.php?act=imageProduct&&pro=' . $id_product);
