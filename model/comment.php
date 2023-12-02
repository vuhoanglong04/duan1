<?php

    function  get_list_comment($product_id) {
        $sql = "SELECT `comment_id`, `content`, `username`, `product_id`, `date`, `status` FROM `comment` WHERE `product_id`='$product_id' and `status`=1  order by `comment_id` desc";
        return pdo_query($sql);
    }
    function add_comment($content , $username , $product_id, $date) {
        $sql ="INSERT INTO `comment`( `content`, `username`, `product_id`, `date`) 
                VALUES ('$content','$username','$product_id','$date')";
        pdo_execute($sql);
    }
    function load_all_comment() {
        $sql ="SELECT * FROM `comment`";
        return pdo_query($sql);
    }
    function hidden_comment($id_comment) {
        $sql = "UPDATE `comment` SET `status`='0' WHERE `comment_id` = '$id_comment'";
        pdo_query($sql);
    }
    function show_comment($id_comment) {
        $sql = "UPDATE `comment` SET `status`='1' WHERE `comment_id` = '$id_comment'";
        pdo_query($sql);
    }
?>