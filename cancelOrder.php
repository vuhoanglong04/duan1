<?php
include('model/pdo.php');
include('model/orders.php');
$id_order = $_GET['id_order'];
echo $id_order;
cancel_order($id_order);
header("Location: index.php?act=history");
