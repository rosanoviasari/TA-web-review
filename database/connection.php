<?php


$hostname = "127.0.0.1";
$user = "root";
$password = "";
$db_name = "db_parfume";

$connection = mysqli_connect($hostname, $user, $password, $db_name);
// var_dump($connection)


function myquery($query){
    global $connection;
    $res = mysqli_query($connection, $query);
    if (strpos($query, 'SELECT') === 0) {
        $returns = [];
        while ($data = mysqli_fetch_assoc($res)) {
            $returns[] = $data;
        }
        return $returns; 
    } else {
        echo "Error: " . mysqli_error($connection);
        return false;
    }
}

?>