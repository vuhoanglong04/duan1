<?php
    function total_revenue_all() {
        $sql ="SELECT SUM(total) as sum FROM `orders` WHERE status = 'Received'";
        return pdo_query($sql);
    }
    function total_revenue_month() {
        $sql ="SELECT SUM(total) as sum FROM `orders` WHERE status = 'Received' and month(date) = month(CURRENT_DATE)";
        return pdo_query($sql);
    }

    function count_order() {
        $sql ="SELECT COUNT(id_order) as countOrder FROM `orders` ";
        return pdo_query($sql);
    }
    function count_comment() {
        $sql ="SELECT COUNT(comment_id) as count from comment ";
        return pdo_query($sql);
    }
    function load_new_comment() {
        $sql ="SELECT * FROM `comment` join product on product.product_id = comment.product_id order by comment_id desc limit 5";
        return pdo_query($sql);
    }
    function sold_out_product() {
        $sql ="SELECT order_detail.id_product_variant, product.product_id, product_variant.id_origin, product_variant.id_type, product.name, quanlity from order_detail
        join orders on orders.id_order = order_detail.order_id
        JOIN product_variant on product_variant.id_product_variant = order_detail.id_product_variant
        join product on product_variant.id_product = product.product_id
        where status = 'Received'
        group by order_detail.id_product_variant";
        return pdo_query($sql);
    }
?>