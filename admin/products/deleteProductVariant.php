<?php
include '../../model/product.php';
include '../../model/pdo.php';
$id_product_variant = $_GET['id'];
delete_product_variant($id_product_variant);
header("Location: ../admin.php?act=listProductVariant");

?>