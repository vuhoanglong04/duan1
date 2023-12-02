<?php
session_start();
?>
<?php
$id_product_variant = $_GET['id_product_variant'];
foreach ($_SESSION['cart'] as $key => $item) {
    if ($item['id_product_variant'] == $id_product_variant) {
        unset($_SESSION['cart'][$key]);
        break;
    }
}
header("Location: index.php?act=cart");
?>
