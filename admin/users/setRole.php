<?php
    include '../../model/user.php';
    include '../../model/pdo.php';
    $username  =  $_GET['user'];
    set_admin($username);
    header("Location: ../admin.php?act=listCustomer");

?>