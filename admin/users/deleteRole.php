<?php
include '../../model/user.php';
include '../../model/pdo.php';
$username  =  $_GET['user'];
delete_admin($username);
header("Location: ../admin.php?act=listCustomer");
