<?php
session_start();

if (isset($_SESSION['username'])){
    header("Location : dashboard.php");
    exit();
}
$user = [
    'admin1' => 'password123',
    'user1' => 'password321'
];
if (isset($_POST['submit_login'])){
    $username = $_POST['txt_username'];
    $password = $_POST['txt_password'];

    if (isset($user[$username]) && $user[$username]===$password){
        $_SESSION['username'] = $username;
        header ('Location: dashboard.php');
        exit();
    }else{
        $err = "Password atau username salah";
    }
}
?>
