<?php
    include '../../model/category.php';
    include '../../model/pdo.php';
    
    $id = $_GET['id'];
    delete_sub_category($id);
    header("Location: ../admin.php?act=subCategory");

?>