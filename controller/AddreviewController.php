<?php
include_once '../../database/review.php';
include_once '../../database/product.php';

function getReview(){	
    $dataReview = getReviewFromDatabase();
    return $dataReview;
}
function getProductReview(){
    $dataProductReview = getProductById();
    return $dataProductReview;
}
function insertReview($id, $product, $username, $review){
    $datainsertReview = "INSERT INTO tb_review('id', 'product', 'username', 'Review') 
    VALUES ($id, $product, $username, $review)";
    return $datainsertReview;
}
?>