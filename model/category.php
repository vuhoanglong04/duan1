<?php
function add_new_category($name, $img)
{
    $sql = "INSERT INTO `danhmuc`( `name`, `image`) VALUES ('$name','$img')";
    pdo_execute($sql);
}
function show_category()
{
    $sql = "SELECT * FROM `danhmuc`";
    return pdo_query($sql);
}
function show_sub_category()
{
    $sql = "SELECT * FROM `sub_category` INNER JOIN `danhmuc` on danhmuc.id = sub_category.id_category";
    return pdo_query($sql);
}
function delete_category($id)
{
    $sql = "DELETE FROM `danhmuc` WHERE `id`='$id'";
    pdo_execute($sql);
}
function delete_sub_category($id)
{
    $sql = "DELETE FROM `sub_category` WHERE `id_sub_category`='$id'";
    pdo_execute($sql);
}
function get_category($id)
{
    $sql = "SELECT * FROM `danhmuc` WHERE `id`='$id'";
    return pdo_query($sql);
}
function get_sub_category($id)
{
    $sql = "SELECT * FROM `sub_category` INNER JOIN `danhmuc` on danhmuc.id = sub_category.id_category WHERE `id_sub_category` = '$id'";
    return pdo_query($sql);
}
function get_sub_category_by_id_category($id)
{
    $sql = "SELECT * FROM `sub_category` WHERE `id_category` = '$id'";
    return pdo_query($sql);
}
function edit_category($id, $name, $image)
{
    $sql = "UPDATE `danhmuc` SET `name`='$name',`image`='$image' WHERE `id`='$id'";
    pdo_execute($sql);
}
function edit_sub_category($id_sub, $name, $image,$id_category)
{
    $sql = "UPDATE `sub_category` SET `name_sub_category`='$name',`image_sub_category`='$image', `id_category`='$id_category' WHERE `id_sub_category`='$id_sub'";
    pdo_execute($sql);
}
function add_sub_category($name, $img, $id_category)
{
    $sql = "INSERT INTO `sub_category`( `name_sub_category`, `image_sub_category`, `id_category`)
                 VALUES ('$name','$img','$id_category')";
    pdo_execute($sql);
}
