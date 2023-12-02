<?php
include('model/pdo.php');
include('model/product.php');
$id_wish_list = $_GET['id_wish_list'];
delete_wish_list($id_wish_list);
header("location: index.php?act=wishlist");

?>
