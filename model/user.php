<?php
function sign_up($email, $username, $password)
{
    $sql = "INSERT INTO `user`( `username`, `password`, `email`) VALUES ('$username','$password','$email')";
    pdo_execute($sql);
}
function sign_in($username, $password)
{
    $sql = "SELECT `username`, `password` FROM `user` WHERE `username`='$username' AND `password`='$password'";
    return pdo_query($sql);
}
function sign_in_admin($username, $password)
{
    $sql = "SELECT `username`, `password` FROM `user` WHERE `username`='$username' AND `password`='$password' and `role`=1";
    return pdo_query($sql);
}
function user_exis($username)
{
    $sql = "SELECT * FROM `user` WHERE `username`='$username'";
    return pdo_query($sql);
}
