<?php
require '../../../controller/LoginController.php';

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
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid" align="center">
        <a class="navbar-brand" href="../../views/dashboard">Perfumery Review</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </nav>
    <!-- navbar end -->
    <div class="content-section">
        <div class="container py-3">
            <div class="card">
                <div class="card-body" align="center">
                    <div class="row">
                        <div class="col-sm-12 mt-4 mb-3" align="center">
                            <h1 class="text-bold mb-4">Login / Register</h1>
                            <hr class="mt-4 mb-2">
                        </div>
                        <form method="POST">
                        <div class="col-12 col-sm-6" align="center">
                            <!-- About -->
                            <div class="row">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
                                    <input type="text" name="txt_username" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                            <div class="row" align="center">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Password</span>
                                    <input type="password" name="txt_password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                </div>
                            </div>
                        </div>
                        <div>
                        <h5>Login / Register 
                            <a href="../../../controller/LoginController.php?action=login&id=<?=$row['id'];?>" type="submit" name="submit_login" class="btn btn-primary">HERE</a>
                        </h5>    
                        </div>
                        </form>
                        <?php if (isset($err)) echo "<p>$err</p>"; ?>
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