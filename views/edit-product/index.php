<?php
require '../../controller/EditproductController.php';
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    }
$dataProductReview = getProductById($id);
$kategori = getKategoriFromDatabase();
$notes = getNotesFromDatabase();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
        <div class="container-fluid" align="center">
        <a class="navbar-brand" href="views/dashboard">Perfumery Review</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <!-- navbar end -->

    <div class="content-section">
    <div class="container-fluid">
            <div class="row mb-4" align="left">
                <div class="col-12">
                    <a href="views/dashboard" type="button" class="btn btn-primary">Back</a>
                </div>
            </div>
        </div>
        <div class="container py-3">
            <div class="card">
                <div class="card-body" align="center">
                    <div class="row">
                        <div class="col-sm-12 mt-4 mb-3" align="center">
                            <h1 class="text-bold mb-4">Edit Product</h1>
                            <hr class="mt-4 mb-2">
                        </div>
                        <form method="POST">
                        <?php foreach ($dataProductReview as $p): ?>
                        <div class="col-12 col-sm-6" align="center">
                            <div class="row">
                                <div class="input-group mb-3">
                                    <img src="../../asset/gambar/<?= $p['gambar_product'];?>" class="card-img-top" alt="...">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Product Image</span>
                                </div>
                            </div>
                            <div class="row" align="center">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Product Name</span>
                                    <input type="text" class="form-control" name="nama_product" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?= $p['nama_product'];?>">
                                </div>
                            </div>
                            <div class="row" align="center">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Category</span>
                                    <select class="form-select" name="select_kategori">
                                    <?php foreach($kategori as $option): ?>
                                        <option value="<?= $option['id']?>">
                                            <?= $option['kategori'];?>
                                        </option>
                                    <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row" align="center">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Brands</span>
                                    <input type="text" class="form-control" name="nama_brand"aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?= $p['nama_brand'];?>">
                                </div>
                            </div>
                            <div class="row" align="center">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Parfume Notes</span>
                                    <select class="form-select" name="select_kategori">
                                    <?php foreach($notes as $option): ?>
                                        <option value="<?= $option['id']?>">
                                            <?= $option['notes_parfume'];?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                </div>
                            </div>
                        </div>
                        </form>
                        <?php endforeach; ?>
                    </div>
                    <div class="row mb-4" align="left">
                    <div class="col-12">
                        <a href="../views/dashboard" type="button" name="submit_product" class="btn btn-primary">Submit</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of content section -->
    </div>

    <!--Ini Footer-->
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