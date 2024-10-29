<?php
session_start();

function login(){
if (isset($_POST['submit_login'])){
    $username = $_POST['txt_username'];
    $password = $_POST['txt_password'];
    
    if (validateUser($username,$password)){
        $_SESSION['username'] = $username;
        header ('Location:../../views/dashboard');
        exit();
    }else{
        $err = "Password atau username salah";
    }
    }
    
}

?>
