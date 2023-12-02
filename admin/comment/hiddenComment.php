<?php
include('../../model/pdo.php');
include('../../model/comment.php');
    $id_comment = $_GET['id_comment'];
    hidden_comment($id_comment) ;
    header("Location: ../admin.php?act=listComment");
?>