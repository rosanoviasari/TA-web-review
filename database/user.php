<?php
session_start();
session_destroy();

function logout(){
    header ('Location: ../../dashboard');
    exit();
    
}


?>
