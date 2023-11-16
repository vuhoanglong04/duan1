<?php
function  create_product($name, $price, $image, $id_category, $id_sub_category, $description)
{
    $sql = "INSERT INTO `sanpham`(`name`, `price`, `image`, `mota`, `luotxem`, `id_category`, `id_sub_category`, `rating`)
                     VALUES ('$name','$price','$image','$description','0','$id_category','$id_sub_category','0')";
    pdo_execute($sql);
}
function show_product()  {
    $sql = "SELECT * FROM `sanpham`";
    return pdo_query($sql);
}