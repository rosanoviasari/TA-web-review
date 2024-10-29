<?php
require 'connection.php';

function validateUser($username,$password){
    $query = "SELECT username,password FROM tb_user WHERE username = $username";
    $data = myquery($query);
    if (isset($data) && $user[$username]===$password){
        return true; 
        }
        return false; 
    $res = myquery($query);
    return $res;
}

?>
