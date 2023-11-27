<?php
include '../../model/product.php';
include '../../model/pdo.php';
$product_id= $_GET['id'];
delete_product($product_id);
header("Location: ../admin.php?act=listProduct");
?>