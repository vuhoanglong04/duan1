<?php
    include '../../model/category.php';
    include '../../model/pdo.php';
    
    $id_category = $_GET['id'];
    delete_category($id_category);
    header("Location: ../admin.php?act=listCategory");

?>