<?php
include_once '../../database/review.php';
include_once '../../database/product.php';

function getEditReview($id){	
    $dataReview = getEditReviewById($id);
    return $dataReview;
}
function getProductReview(){
    $dataProductReview = getProductById();
    return $dataProductReview;
}

?>