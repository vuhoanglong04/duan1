<?php
    function get_coupon($code_coupon) {
        $sql ="SELECT `code_coupon`, `percent_discount` FROM `coupon` WHERE `code_coupon`='$code_coupon'";
        return pdo_query($sql);
    }
?>