<?php
include '../../database/product.php';

function getProduct(){	
    $dataProduct = getProductFromDatabase();
    return $dataProduct;
}


?>