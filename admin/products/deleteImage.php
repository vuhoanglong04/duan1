<?php
include '../../model/product.php';
include '../../model/pdo.php';
$id_image = $_GET['id_image'];
$id_product = $_GET['pro'];
delete_image($id_image);
header('location: ../admin.php?act=imageProduct&&pro='.$id_product);
