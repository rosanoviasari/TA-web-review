<?php
require '../../controller/EditreviewController.php';
session_start();

if (isset($_GET['id'])) { // untuk mendapatkan id review
    $id = (int) $_GET['id'];
    }
$dataReview = getEditReviewById($id); //fungsi untuk mendapatkan review sesuai id review (ada id review, id product, username, produk, review)
$idproduct = $dataReview[0]['product_id'];
$dataProductReview = getProductById($idproduct); //fungsi untuk mendapatkan product sesuai id product (ada gambar, ada keterangan lainnya)

if (isset($_POST['submit_edit_review'])) {
    $review = $_POST['txt_review'];
    $idreview = $id;

    $res = updateReviewById($idreview, $review);
    header ('Location: ../../views/detail?id='.$idproduct);
    if ($res) {
        echo "Review berhasil ditambahkan.";
    } else {
        echo "Gagal menambahkan review.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Review</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Lavishly+Yours&family=WindSong:wght@400;500&display=swap');
    </style>
</head>
<body>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
        <div class="container-fluid" align="center">
        <a class="navbar-brand" href="../../views/dashboard" style="font-family: WindSong, cursive;">Perfumery Review</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <!-- navbar end -->

<div class="content-section">
    <div class="container-fluid">
            <div class="row mb-4" align="left">
                <?php foreach ($dataProductReview as $p): ?>
                    <div class="col-12">
                        <a href="../views/detail?id=<?=$p['id'];?>" type="button" class="btn btn-primary">Back</a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row">
                <?php if(isset($err)):?>
                    <p><?= $err; ?></p>
                <?php endif; ?>
            </div>
        <div class="container py-3">
            <div class="card">
                <div class="card-body" align="center">
                    <div class="row">
                        <div class="col-sm-12 mt-4 mb-3" align="center">
                            <h1 class="text-bold mb-4">Edit Review</h1>
                            <hr class="mt-4 mb-2">
                        </div>
                        <form method="POST">
                                <div class="container text-center mb-4">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="card" style="width: 25rem;" >
                                                <?php foreach ($dataProductReview as $p): ?>
                                                    <img src="../../asset/gambar/<?= $p['gambar_product'];?>" class="card-img-top" alt="...">
                                                        <div class="card-body">
                                                            <h5 class="card-title"><?= $p['kategori'];?></h5>
                                                            <h5 class="card-title"><?= $p['nama_brand'];?></h5>
                                                            <h5 class="card-title"><?= $p['nama_product'];?></h5>
                                                            <p class="card-text">Notes : <?= $p['nama_notes_parfume'];?></p>
                                                            <input type="hidden" name="id" value="<?= $p['id']; ?>">
                                                        </div>
                                                <?php endforeach;?> 
                                            </div>
                                        </div>
                                        <div class="col-8" align="left">
                                            <?php foreach ($dataReview as $r): ?>
                                                <span class="input-group-text">Review</span>
                                                <textarea class="form-control" name="txt_review" aria-label="With textarea"> <?= $r['review'];?> </textarea>
                                                <div class="row mb-4 mt-3" align="left">
                                                    <div class="col-12">
                                                        <button type="submit" name="submit_edit_review" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            <?php endforeach;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End of content section -->

    <!--Footer-->
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