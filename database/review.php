<?php
require_once 'connection.php';

function getReviewById($id){
    $query = "SELECT
    tb_review.id, 
    tb_product.nama_product as product,
    tb_review.username, 
    tb_review.review
    FROM tb_review
    JOIN tb_product ON tb_review.product = tb_product.id
    WHERE tb_product.id = $id";
    $res = myquery($query);
    return $res;
}

function getEditReviewById($id){
    $query = "SELECT
    tb_review.id, 
    tb_product.id as product_id,
    tb_product.nama_product as product,
    tb_review.username, 
    tb_review.review as review
    FROM tb_review
    JOIN tb_product ON tb_review.product = tb_product.id
    WHERE tb_review.id = $id";
    $res = myquery($query);
    return $res;
}

function insertReview($product, $username, $review) {
    $query = "INSERT INTO tb_review (product, username, review) VALUES ('$product', '$username', '$review')";
    $res = myquery($query);
    return $res;
}

function deleteReviewById($id){
    $query = "DELETE FROM tb_review WHERE tb_review.id = $id";
    $res = myquery($query);
    return $res;
}
function updateReviewById($id, $review){
    $query = "UPDATE tb_review 
    SET review = '$review'
    WHERE tb_review.id = $id";
    $res = myquery($query);
    return $res;
}
?>