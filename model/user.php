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

function load_all_user() {
    $sql = "SELECT * FROM `user`";
    return pdo_query($sql);
}
function get_user($username){
    $sql ="SELECT * FROM `user` WHERE `username`='$username'";
    return pdo_query($sql);
}
function update_avatar($username , $img) {
    $sql = "UPDATE `user` SET `image`='$img' WHERE `username` = '$username'";
    pdo_execute($sql);
}
function admin_change_user($username  , $full_name, $password , $email, $address , $telephone){
    $sql = "UPDATE `user` SET `password`='$password',`full_name`='$full_name',`email`='$email', `address`='$address',`telephone`='$telephone' WHERE `username` = '$username'";
    pdo_execute($sql);
}
function delete_user($username){
    $sql = "DELETE FROM `user` WHERE `username` ='$username'";
    pdo_execute($sql);
}
function set_admin($username){
    $sql = "UPDATE `user` SET `role`='1' WHERE `username`='$username'";
    pdo_execute($sql);
}
function delete_admin($username){
    $sql = "UPDATE `user` SET `role`='0' WHERE `username`='$username'";
    pdo_execute($sql);
}