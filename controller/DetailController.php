<?php
include_once '../../database/review.php';
include_once '../../database/product.php';


function getReview(){
    $dataReview = getReviewById();
    return $dataReview;
}
function getProductReview(){
    $dataProductReview = getProductById();
    return $dataProductReview;
}
function deleteReview(){
    $deleteReview = deleteReview();
    return $deleteReview;
}
?>