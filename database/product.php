<?php
require_once 'connection.php';

// fungsi get product dari database

function getProductFromDatabase(){
    $query = "SELECT tb_product.id as id, tb_product.gambar_product as gambar_product, tb_product.nama_product as nama_product, tb_kategori.kategori as kategori, tb_brand.nama_brand as nama_brand, tb_notes_parfume.nama_notes_parfume as nama_notes_parfume FROM tb_product 
    JOIN tb_kategori ON kategori_product = tb_kategori.id
    JOIN tb_brand ON brand_product = tb_brand.id
    JOIN tb_notes_parfume ON Notes_Parfume = tb_notes_parfume.id";
    $res = myquery($query);
    return $res;

}

// fungsi get product by id
function getProductById($id){ 
    $query = "SELECT tb_product.id as id, 
    tb_product.gambar_product as gambar_product, 
    tb_product.nama_product as nama_product, 
    tb_kategori.kategori as kategori, 
    tb_brand.nama_brand as nama_brand, 
    tb_notes_parfume.nama_notes_parfume as nama_notes_parfume 
    FROM tb_product 
    JOIN tb_kategori ON kategori_product = tb_kategori.id
    JOIN tb_brand ON brand_product = tb_brand.id
    JOIN tb_notes_parfume ON Notes_Parfume = tb_notes_parfume.id
    WHERE tb_product.id = $id";
    $res = myquery($query);
    return $res;
}

?>