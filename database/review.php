<?php
require 'connection.php';

function getReviewById($id){
    $query = "SELECT
    tb_review.id, 
    tb_product.nama_product as product,
    tb_user.username, 
    tb_review.review
    FROM tb_review
    JOIN tb_product ON tb_review.product = tb_product.id
    JOIN tb_user ON tb_review.username = tb_user.id
    WHERE tb_review.id = $id";
    $res = myquery($query);
    return $res;
}

?>