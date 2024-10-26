<?php
include '../../database/review.php';

function getReview(){
    $dataReview = getReviewById();
    return $dataReview;
}
?>