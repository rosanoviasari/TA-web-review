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
    $query = "SELECT product.id as id, 
    product.gambar_product, 
    product.nama_product, 
    kategori.kategori, 
    brand.nama_brand, 
    notes.nama_notes_parfume as Notes_Parfume,
    notes.nama_notes_parfume as Top_Notes,
    notes.nama_notes_parfume as Middle_Notes,
    notes.nama_notes_parfume as Base_Notes
    FROM tb_product  as product

    JOIN tb_kategori as kategori 
    ON product.kategori_product = kategori.id

    JOIN tb_brand as brand 
    ON product.brand_product = brand.id

    JOIN tb_notes_parfume as notes 
    ON product.Notes_Parfume = notes.id

    WHERE product.id = $id";
    $res = myquery($query);

    // var_dump($res);
    // die();
    return $res;
}

function getKategoriFromDatabase(){
    $query = "SELECT tb_kategori.id as id, tb_kategori.kategori as kategori FROM tb_kategori";
    $res = myquery($query);
    return $res;
}

function getNotesFromDatabase(){
    $query = "SELECT tb_notes_parfume.id as id, 
    tb_notes_parfume.nama_notes_parfume as notes_parfume 
    FROM tb_notes_parfume";
    $res = myquery($query);
    return $res;
}
function updateProduct($id, $kategori, $topnotes, $middlenotes, $basenotes){
    $query = "UPDATE tb_product 
    SET kategori_product = $kategori,
    Top_Notes = $topnotes, 
    Middle_Notes = $middlenotes, 
    Base_Notes = $basenotes
    WHERE id = $id";
    $res = myquery($query);
    return $res; 
}



?>