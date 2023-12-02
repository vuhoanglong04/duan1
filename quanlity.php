<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['product_id'])  && isset($_POST['quanlity'])) {
    $id_product_variant = $_POST['product_id'];
    $quanlity = $_POST['quanlity'];
    foreach ($_SESSION['cart'] as $key => &$item) {
        if ($item['id_product_variant'] == $id_product_variant) {
            $item['quanlity'] =$quanlity;
            break;
        }
    }
    echo "DONE";
}
else echo "NOT";
