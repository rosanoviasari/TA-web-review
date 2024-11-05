<?php
require '../../controller/DetailController.php';
session_start();
if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    }
if (isset($_POST['delete_review'])){
    $deleteReview = deleteReviewById($_POST['id_review']);
}
$dataReview = getReviewById($id);
$dataProductReview = getProductById($id);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfumery Review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Lavishly+Yours&family=WindSong:wght@400;500&display=swap');
    </style>
</head>
<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
        <div class="container-fluid">
        <a class="navbar-brand" href="dashboard" style="font-family: WindSong, cursive;">Perfumery Review</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        </div>
    </nav>
    <!-- navbar end -->
    <div class="content-section">
        <div class="container-fluid">
                <div class="col-12">
                    <a href="../views/dashboard" type="button" class="btn btn-primary">Back</a>
                </div>
            <div class="row mb-4" align="right">
                <div class="col-12">
                    <?php foreach ($dataProductReview as $p): ?>
                        <a href="../../views/add-review?id=<?=$p['id'];?>" type="button" class="btn btn-primary">Add New Review</a>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
        <div class="container text-center mb-4">
            <div class="row">
                <div class="col-5">
                    <div class="card" style="width: 25rem;">
                        <?php foreach ($dataProductReview as $p): ?>
                            <img src="../../asset/gambar/<?= $p['gambar_product'];?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $p['kategori'];?></h5>
                                    <h5 class="card-title"><?= $p['nama_brand'];?></h5>
                                    <h5 class="card-title"><?= $p['nama_product'];?></h5>
                                    <p class="card-text">Notes : <?= $p['nama_notes_parfume'];?></p>
                                    <a href="../../views/edit-product?id=<?=$p['id'];?>" type="button" class="btn btn-primary">Edit product</a>
                                </div>
                        <?php endforeach;?>
                    </div>
                </div>
                <div class="col-7">
                    <?php foreach ($dataReview as $r) : ?>
                        <div class="card mb-4">
                            <div class="card-body" align="left">
                                <h6><?= $r['username'];?></h6>
                                <p><?= $r['review'];?></p>
                                    <div class="row">
                                        <div class="col-3 mb-2">
                                            <button class="btn btn-primary" onclick="location.href='../../views/edit-review?id=<?= $r['id']; ?>'">Edit Review</button>
                                        </div>
                                        <div class="col-3">
                                        <form method="POST">
                                            <button type="submit" name="delete_review" class="btn btn-danger">Delete Review</button>
                                            <input type="hidden" name="id_review" value="<?= $r['id'];?>">
                                        </form>
                                        </div>
                                    </div>            
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>    
                </div>
            </div>
        </div>
    </div>

    <!--Footer Start-->
    <div class="card">
        <div class="card-footer">
        <marquee>
            <address style="font-family: WindSong, cursive;">&copy;2024 - All Right Reserved</address>
        </marquee>
        </div>
    </div>
    <!-- End of Footer -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>