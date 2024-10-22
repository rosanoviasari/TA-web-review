<?php
require 'connection.php';

$data = myquery("SELECT p.id, p.gambar_product, p.nama_product, k.kategori, b.nama_brand, n.nama_notes_parfume 
FROM tb_product AS p 
JOIN tb_kategori AS k ON p.kategori_product = k.id 
JOIN tb_brand AS b ON p.brand_product = b.id 
JOIN tb_notes_parfume AS n ON p.notes_parfume = n.id");


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
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
        <div class="container-fluid">
        <a class="navbar-brand" href="./dashboard.php">Perfumery Review</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Hi, Username
                </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./dashboard.php">Logout</a></li>
                </ul>
            </li>
        </ul>
        </div>
        </div>
    </nav>
    <!-- navbar end -->
    <div class="content-section">
        <div class="container-fluid">
            <div class="row mb-4" align="right">
                <div class="col-12">
                    <a href="./addnewproduct.php" type="button" class="btn btn-primary">Add New Products</a>
                </div>
            </div>
        </div>
        <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active" align="center">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <!-- ini baris pertama -->
                                <div class="col-sm-4 col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                        <img src="../asset/gambar/Mine_Luciddreams.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Mine - Lucid Dreams</h5>
                                        <p class="card-text">Notes parfume : Musk</p>
                                        <a href="./read_review.php" class="btn btn-primary">Read Review</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                        <img src="../asset/gambar/BOHE_Scentofheaven.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">BOHE Bali - Scent of Heaven</h5>
                                        <p class="card-text">Notes parfume : Floral</p>
                                        <a href="./read_review.php" class="btn btn-primary">Read Review</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                        <img src="../asset/gambar/HMNS_Alpha.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">HMNS - Alpha</h5>
                                        <p class="card-text">Notes parfume : Gourmand</p>
                                        <a href="./read_review.php" class="btn btn-primary">Read Review</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
                <div class="carousel-item" align="center">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <!-- ini baris pertama -->
                                <div class="col-sm-4 col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                        <img src="../asset/gambar/Mine_Luciddreams.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Mine - Lucid Dreams</h5>
                                        <p class="card-text">Notes parfume : Musk</p>
                                        <a href="./detail.html" class="btn btn-primary">Read Review</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                        <img src="../asset/gambar/BOHE_Scentofheaven.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">BOHE Bali - Scent of Heaven</h5>
                                        <p class="card-text">Notes parfume : Floral</p>
                                        <a href="./detail.html" class="btn btn-primary">Read Review</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                        <img src="../asset/gambar/HMNS_Alpha.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">HMNS - Alpha</h5>
                                        <p class="card-text">Notes parfume : Gourmand</p>
                                        <a href="./detail.html" class="btn btn-primary">Read Review</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" align="center">
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-4">
                                <!-- ini baris pertama -->
                                <div class="col-sm-4 col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                        <img src="../asset/gambar/Mine_Luciddreams.png" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">Mine - Lucid Dreams</h5>
                                        <p class="card-text">Notes parfume : Musk</p>
                                        <a href="./detail.html" class="btn btn-primary">Read Review</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                        <img src="../asset/gambar/BOHE_Scentofheaven.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">BOHE Bali - Scent of Heaven</h5>
                                        <p class="card-text">Notes parfume : Floral</p>
                                        <a href="./detail.html" class="btn btn-primary">Read Review</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 col-lg-4">
                                    <div class="card" style="width: 18rem;">
                                        <img src="../asset/gambar/HMNS_Alpha.jpg" class="card-img-top" alt="...">
                                        <div class="card-body">
                                        <h5 class="card-title">HMNS - Alpha</h5>
                                        <p class="card-text">Notes parfume : Gourmand</p>
                                        <a href="./detail.html" class="btn btn-primary">Read Review</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>

    <!--Footer Start-->
    <div class="card">
        <div class="card-footer">
        <marquee>
            <address>&copy;2024 - All Right Reserved</address>
        </marquee>
        </div>
    </div>
    <!-- End of Footer -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>