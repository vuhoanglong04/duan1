<?php
function  add_category($name_category)
{
    $sql = "INSERT INTO `category`( `name_category`) VALUES ('$name_category')";
    pdo_execute($sql);
}
function  add_sub_category($name_sub_category, $parent_category_id)
{
    $sql = "INSERT INTO `sub_category`(`name_sub_category`, `parent_category_id`) VALUES ('$name_sub_category','$parent_category_id')";
    pdo_execute($sql);
}
function  load_all_category()
{
    $sql = "SELECT * FROM `category`";
    return pdo_query($sql);
}
function  load_all_sub_category()
{
    $sql = "SELECT * FROM `sub_category`  order by `id_sub_category` desc";
    return pdo_query($sql);
}
function delete_sub_category($sub_category_id)
{
    $sql = "DELETE FROM `sub_category` WHERE `id_sub_category` = '$sub_category_id'";
    pdo_execute($sql);
}

function delete_category($category_id)
{
    $sql = "DELETE FROM `category` WHERE `category_id` = '$category_id'";
    pdo_execute($sql);
}
function get_category($id_category)
{
    $sql = "SELECT * FROM `category` WHERE `category_id` ='$id_category'";
    return pdo_query($sql);
}
function get_sub_category($id_sub_category)
{
    $sql = "SELECT * FROM `sub_category` WHERE `id_sub_category` ='$id_sub_category'";
    return pdo_query($sql);
}

function edit_category($category_id, $new_name_category)
{
    $sql = "UPDATE `category` SET `name_category`='$new_name_category' WHERE `category_id`='$category_id'";
    pdo_execute($sql);
}
function edit_sub_category($id_sub_category, $new_name, $new_parent_id)
{
    $sql = "UPDATE `sub_category` SET`name_sub_category`='$new_name',`parent_category_id`='$new_parent_id' WHERE `id_sub_category`='$id_sub_category'";
    pdo_execute($sql);
}
function get_sub_category_by_id_category($category_id)
{
    $sql = "SELECT `id_sub_category`, `name_sub_category`, `parent_category_id` FROM `sub_category` WHERE `parent_category_id`='$category_id'";
    return pdo_query($sql);
}
function search_sub_category($text){
    $sql = "SELECT * FROM `sub_category` WHERE `name_sub_category` LIKE '%$text%';";
    return pdo_query($sql);
}
