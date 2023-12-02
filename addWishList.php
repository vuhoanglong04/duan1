<?php
include('model/pdo.php');
include('model/product.php');
if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
} else {
    header("Location: login.php");
}
$id_product = $_GET['id_pro'];
add_wish_list($_COOKIE['username'], $id_product);
header("Location: index.php?act=wishlist");
