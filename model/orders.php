<?php
function create_orders($username, $date, $name_transport, $code_coupon, $total, $payment_methods)
{
    $sql = "INSERT INTO `orders`( `username`, `date`, `name_transport`, `code_coupon`, `total`,`payment_methods`,`status`)
             VALUES (   '$username','$date','$name_transport','$code_coupon','$total','$payment_methods' , 'Awaiting Confirmation')";
    pdo_execute($sql);
}
function get_fee_shipping($name_transport)
{
    $sql = "SELECT `name_transport`, `fee` FROM `transport` WHERE`name_transport` = '$name_transport'";
    return pdo_query($sql);
}
function get_payment()
{
    $sql = "SELECT * FROM `payment_methods`";
    return pdo_query($sql);
}
function get_latest_order()
{
    $sql = "SELECT * FROM `orders` order by id_order desc limit 1";
    return pdo_query($sql);
}
function create_order_detail($order_id, $id_product_variant, $id_origin, $id_type, $price, $quanlity, $total)
{
    $sql = "INSERT INTO `order_detail`( `order_id`, `id_product_variant`, `id_origin`, `id_type`, `quanlity`, `price`, `total`)
     VALUES ('$order_id','$id_product_variant','$id_origin',' $id_type','$price','$quanlity','$total')";
    pdo_execute($sql);
}
function get_orders($username)
{
    $sql = "SELECT * FROM `orders`  WHERE `username`='$username' ORDER by `id_order` desc";
    return pdo_query($sql);
}
function get_detail_order_by_id($id_order)
{
    $sql = "SELECT * FROM `order_detail` WHERE  `order_id`='$id_order'";
    return pdo_query($sql);
}
function cancel_order($id_order)
{
    $sql = "UPDATE `orders` SET `status`= 'Cancelled' WHERE `id_order` = '$id_order'";
    pdo_execute($sql);
}
function    received_order($id_order)
{
    $sql = "UPDATE `orders` SET `status`= 'Received' WHERE `id_order` = '$id_order'";
    pdo_execute($sql);
    $get_list_product_variant_in_order = "SELECT * FROM `order_detail`  WHERE  `order_id`='$id_order'";
    $result = pdo_query($get_list_product_variant_in_order);
    foreach ($result as $key =>   $value) {
        $id_product_variant = $value['id_product_variant'];
        $mirror = "UPDATE `product_variant` 
       SET `quanlity_inventory` = `quanlity_inventory` - 1 WHERE `id_product_variant` = '$id_product_variant'";
        pdo_execute($mirror);
    }
}

function confirm_order($id_order)
{
    $sql = "UPDATE `orders` SET `status`= 'In transit' WHERE `id_order` = '$id_order'";
    pdo_execute($sql);
}
function load_all_orders()
{
    $sql = "SELECT * FROM `orders` ORDER by `id_order` desc ";
    return pdo_query($sql);
}
