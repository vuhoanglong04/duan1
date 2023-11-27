<?php
    include '../../model/user.php';
    include '../../model/pdo.php';
    
    $username = $_GET['username'];
    delete_user($username);
    header("Location: ../admin.php?act=listCustomer");
?>