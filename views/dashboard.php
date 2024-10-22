<?php
require 'connection.php';

$data = myquery("SELECT p.id, p.gambar_product, p.nama_product, k.kategori, b.nama_brand, n.nama_notes_parfume 
FROM tb_product AS p 
JOIN tb_kategori AS k ON p.kategori_product = k.id 
JOIN tb_brand AS b ON p.brand_product = b.id 
JOIN tb_notes_parfume AS n ON p.notes_parfume = n.id");

var_dump($data);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfumery Review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        <a class="navbar-brand" href="indexreview.php">Perfumery Review</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- navbar end -->
    <div class="content-section">
        <div class="container py-3">
            <div class="card">
                <div class="card-body">
                    <h3>Article List</h3>
                    <div class="row mb-4">
                        <?php foreach($data as $row):?>
                        <!-- kolom products -->
                        <div class="col-sm-3 col-lg-3 mb-4">
                            <div class="card" style="width: 18rem;">
                                <img src="<?= $row['gambar_product'] ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title"><?= $row['nama_product'];?></h5>
                                  <p class="card-text">Notes Perfume <?= $row['notes'] ?></p>
                                  <a href="./detail.html" class="btn btn-primary">Read Review</a>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>                    
                    <!-- end of products -->
                    </div>
                    <div class="row mb-4">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </nav>                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End of content section -->
    </div>

    <!--Footer Start-->
<footer class="my-footer">
    <marquee>
        <address>&copy;2024 - All Right Reserved</address>
    </marquee>
</footer>
    <!-- End of Footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>