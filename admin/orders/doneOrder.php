<?php
include '../../model/orders.php';
include '../../model/pdo.php';
$id_order = $_GET['id_order'];
received_order($id_order);
header("Location: ../admin.php?act=orderHistory");
