<?php
include '../../model/category.php';
include '../../model/pdo.php';

$sub_category_id = $_GET['id'];
delete_sub_category($sub_category_id);
header("Location: ../admin.php?act=listSubCategory");
?>
