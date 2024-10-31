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
function getUpdateProduct($kategori,$notes){
    $dataUpdateProduct = updateProduct();
    return $dataUpdateProduct;
}

?>