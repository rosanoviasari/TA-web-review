<?php

include '../../database/review.php';

function getReview(){	
    $dataReview = getReviewFromDatabase();
    return $dataReview;
}

?>