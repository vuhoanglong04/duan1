<?php
function check($email)
{
    $pattern = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    // Use preg_match to perform the validation
    if (preg_match($pattern, $email)) {
        return  "";
    } else {
        return "*Invalid email address.";
    }
}
function  check_pass($password)
{
    // Define the regular expression pattern for a basic password validation
    $pattern = '/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/';

    // Use preg_match to perform the validation
    if (preg_match($pattern, $password)) {
        return "";
    } else {
        return "*Password at least one alphabetical character,one digit,one special character";
    }
}
function  check_username($username)
{
    if ($username == '') {
        return "Please enter your username";
    } else {
      return "";
    }
}
