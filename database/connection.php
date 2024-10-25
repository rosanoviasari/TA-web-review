<?php


// var_dump($connection)


function myquery($query){
    $hostname = "127.0.0.1";
    $user = "root";
    $password = "";
    $db_name = "db_parfume";

    $connection = mysqli_connect($hostname, $user, $password, $db_name);

    $res = mysqli_query($connection, $query);
    $returns = [];
    while($data = mysqli_fetch_assoc($res)){
        $returns[] = $data;
    }
    return $returns;
}

?>