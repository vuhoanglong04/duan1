<?php
function add_product($name_product, $price, $description, $id_sub_category)
{
    $sql = "INSERT INTO `product`(`name`, `price`, `desciption`, `sub_category_id`)
         VALUES ('$name_product','$price','$description','$id_sub_category')";
    pdo_execute($sql);
}
function load_all_product()
{
    $sql = "SELECT * FROM `product`   order by `product_id` desc";
    return pdo_query($sql);
}
function get_product($product_id)
{
    $sql = "SELECT * FROM `product`  join sub_category on product.sub_category_id = sub_category.id_sub_category where`product_id`='$product_id'";
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
function get_name_category($id_product)
{
    $sql = "SELECT * FROM `product` JOIN sub_category on product.sub_category_id = sub_category.id_sub_category where product_id = '$id_product'";
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
    $sql = "SELECT * FROM `product_variant`  order by `id_product_variant` desc";
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
function edit_product_variant($id_product_variant, $id_origin, $id_type, $price, $quanlity_inventory)
{
    $sql = "UPDATE `product_variant` SET `id_origin`='$id_origin',`id_type`='$id_type',`price_product_variant`='$price',`quanlity_inventory`='$quanlity_inventory' WHERE `id_product_variant`='$id_product_variant'";
    pdo_execute($sql);
}
function add_trending($product_id)
{
    $sql = "INSERT INTO `trending_product`(`product_id`) VALUES ('$product_id')";
    pdo_execute($sql);
}
function load_all_trending_product()
{
    $sql = "SELECT * FROM `trending_product`  
    JOIN `product` on trending_product.product_id = product.product_id
    JOIN `sub_category` on sub_category.id_sub_category = product.sub_category_id
    join `product_image` on product_image.product_id = product.product_id where  main=1";
    return pdo_query($sql);
}
function delete_trending($product_id)
{
    $sql = "DELETE FROM `trending_product` WHERE `product_id`='$product_id'";
    pdo_execute($sql);
}
function  count_product_by_sub_category($sub_category_id)
{
    $sql = "SELECT sub_category_id,COUNT(product_id) as quanlity FROM product join sub_category 
    on product.sub_category_id = sub_category.id_sub_category WHERE sub_category_id = '$sub_category_id' group by sub_category_id ";
    return pdo_query($sql);
}
function get_all_origin_from_product($product_id)
{
    $sql = "SELECT * FROM `product_variant` JOIN `origin` on product_variant.id_origin =  origin.id_origin  WHERE `id_product`='$product_id' GROUP by product_variant.id_origin";
    return pdo_query($sql);
}
function get_all_type_from_product($product_id)
{
    $sql = "SELECT * FROM `product_variant` JOIN `type` on product_variant.id_type =  type.id_type  WHERE `id_product`='$product_id' GROUP by product_variant.id_type";
    return pdo_query($sql);
}
function get_type_by_origin($product_id, $id_origin)
{
    $sql = "SELECT * FROM `product_variant`  JOIN type on product_variant.id_type = type.id_type  WHERE `id_product` = '$product_id' AND `id_origin` = '$id_origin'";
    return pdo_query($sql);
}
function get_product_variant_by_condition($product_id, $id_origin, $id_type)
{
    $sql = "SELECT * FROM `product_variant` 
    inner join product on product_variant.id_product = product.product_id  
    JOIN type on product_variant.id_type = type.id_type 
    join origin on product_variant.id_origin = origin.id_origin 
    join product_image on product_variant.id_product = product_image.product_id
    WHERE `product_variant`.`id_product`='$product_id' AND `product_variant`.`id_type`='$id_type' AND `product_variant`.`id_origin`='$id_origin' AND `product_image`.`main`=1";
    return pdo_query($sql);
}
function add_wish_list($username, $product_id)
{
    $currentDateTime = date("Y-m-d H:i:s");
    $sql = "INSERT INTO `wish_list`(`username`, `product_id`,`date_added`) VALUES ('$username','$product_id','$currentDateTime')";
    return pdo_execute($sql);
}

function addToCart($product)
{
    // Kiểm tra xem giỏ hàng có tồn tại chưa, nếu chưa thì tạo mới
    if (!isset($_SESSION['cart'])) {
        $product['quanlity'] = 1;
        // Thêm sản phẩm vào giỏ hàng
        $_SESSION['cart'][] = $product;
    } else {
        foreach ($_SESSION['cart'] as $key => &$item) {
            if ($item['id_product_variant'] == $product['id_product_variant']) {
                echo "<script>alert('The product already exists in your shopping cart')</script>";
                $item['quanlity'] += 1;
                return;
            }
        }
        $product['quanlity'] = 1;
        // Thêm sản phẩm vào giỏ hàng
        $_SESSION['cart'][] = $product;
    }
}

function load_all_transport()
{
    $sql = "SELECT * FROM `transport`";
    return pdo_query($sql);
}
function get_wish_list($username)
{
    $sql = "SELECT * FROM `wish_list` join `product` on wish_list.product_id = product.product_id join `product_image` on product.product_id = product_image.product_id where `username` = '$username' and `main` =1";
    return pdo_query($sql);
}
function delete_wish_list($id_wish_list)
{
    $sql = "DELETE FROM `wish_list` WHERE `id_wish_lish` = '$id_wish_list'";
    pdo_execute($sql);
}

function find_product($text)
{
    $sql = "SELECT * FROM `product` WHERE `name` LIKE '" . "%$text%'";
    return pdo_query($sql);
}
function order_by_price()
{
    $sql = "SELECT * FROM `product` order by price asc limit 5";
    return pdo_query($sql);
}
function search_product($text)
{
    $sql = "SELECT * FROM `product` WHERE `name` LIKE '%$text%';";
    return pdo_query($sql);
}
function get_related_products($id_sub_category, $id_product)
{
    $sql = " SELECT * FROM `product`
    join product_image on product.product_id = product_image.product_id
    join sub_category on product.sub_category_id = sub_category.id_sub_category
    WHERE `sub_category_id`='$id_sub_category' AND`product`.`product_id` !='$id_product'
    ";
    return pdo_query($sql);
}
function get_list_img($id_product){
    $sql="SELECT `id_image`, `product_id`, `image_path`, `main` FROM `product_image` WHERE `product_id`='$id_product' and `main` != '1'";
    return pdo_query($sql);
}
