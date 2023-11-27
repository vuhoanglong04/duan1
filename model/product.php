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
    $sql = "SELECT * FROM `product` WHERE `product_id`='$product_id'";
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
function delete_product($product_id)
{
    $sql = "DELETE FROM `product` WHERE `product_id`='$product_id'";
    pdo_execute($sql);
}

function update_product($product_id, $name_product, $price, $description, $id_sub_category)
{
    $sql = "UPDATE `product` SET `name`='$name_product',`price`='$price',
            `desciption`='$description',`sub_category_id`='$id_sub_category' WHERE `product_id` = '$product_id'";
    pdo_execute($sql);
}

//VARIANT
function load_all_origin()
{
    $sql = "SELECT * FROM `origin`";
    return pdo_query($sql);
}
function load_all_type()
{
    $sql = "SELECT * FROM `type`";
    return pdo_query($sql);
}
function load_product_by_category($category_id)
{
    $sql = "SELECT * FROM `product` WHERE `sub_category_id` = '$category_id'";
    return pdo_query($sql);
}
function add_product_variant($id_product, $id_origin, $id_type, $price, $quanlity_inventory)
{
    $sql = "INSERT INTO `product_variant`(`id_product`, `id_origin`, `id_type`, `price_product_variant`, `quanlity_inventory`) 
        VALUES ('$id_product',' $id_origin',' $id_type',' $price',' $quanlity_inventory')";
    pdo_query($sql);
}
function  load_all_product_variant()
{
    $sql = "SELECT * FROM `product_variant`";
    return pdo_query($sql);
}

function delete_product_variant($id_product_variant)
{
    $sql = "DELETE FROM `product_variant` WHERE `id_product_variant`='$id_product_variant'";
    pdo_execute($sql);
}
function get_product_variant($id_product_variant)
{
    $sql = "SELECT * FROM `product_variant` WHERE `id_product_variant`='$id_product_variant'";
    return pdo_query($sql);
}
function edit_product_variant($id_product_variant, $id_origin, $id_type, $price, $quanlity_inventory) {
    $sql ="UPDATE `product_variant` SET `id_origin`='$id_origin',`id_type`='$id_type',`price_product_variant`='$price',`quanlity_inventory`='$quanlity_inventory' WHERE `id_product_variant`='$id_product_variant'";
    pdo_execute($sql);
}
