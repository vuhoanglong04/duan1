<?php
include('model/product.php');
include('model/pdo.php');
$product_id = $_POST['product_id'];
$id_origin = $_POST['id_origin'];
$id_type = $_POST['id_type'];
$product = get_product_variant_by_condition($product_id, $id_origin, $id_type);
?>
<a style="color: white;font-weight: bolder " href="" class="ok" id="total"> <span></span> </a>
