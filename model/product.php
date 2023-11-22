<?php
function add_product($name_product, $price, $description, $id_sub_category)
{
    $sql = "INSERT INTO `product`(`name`, `price`, `desciption`, `sub_category_id`)
         VALUES ('$name_product','$price','$description','$id_sub_category')";
    pdo_execute($sql);
}
function load_all_product()
{
    $sql = "SELECT * FROM `product`";
    return pdo_query($sql);
}
function get_product($product_id)
{
    $sql = "SELECT `name` FROM `product` WHERE `product_id`='$product_id'";
    return pdo_query($sql);
}

function get_list_img_product($product_id)
{
    $sql = "SELECT * FROM `product_image` WHERE `product_id`='$product_id'";
    return pdo_query($sql);
}
function get_main_image($id_product)
{
    $sql = "SELECT `image_path` FROM `product_image` WHERE `main`=1 and `product_id`='$id_product'";
    return pdo_query($sql);
}
function delete_image($product_id)
{
    $sql = "DELETE FROM `product_image` WHERE `id_image`='$product_id'";
    pdo_execute($sql);
}
function set_main_image($id_image)
{
    $sql  = "UPDATE `product_image` SET`main`='1' WHERE `id_image`='$id_image'";
    pdo_execute($sql);
}
