<?php

require '';

function getProduct(){
    [$gambar_product, $nama_product, $kategori_product, $nama_brand, $nama_notes_parfume]
    return $array_return;
}

getProduct = myquery("SELECT p.id, p.gambar_product, p.nama_product, k.kategori, b.nama_brand, n.nama_notes_parfume 
FROM tb_product AS p 
JOIN tb_kategori AS k ON p.kategori_product = k.id 
JOIN tb_brand AS b ON p.brand_product = b.id 
JOIN tb_notes_parfume AS n ON p.notes_parfume = n.id");{

}

?>