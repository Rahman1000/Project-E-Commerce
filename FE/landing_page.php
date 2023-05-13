<?php require_once '../BE/dbkoneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Toko Alat Tulis</title>
        <link rel="icon" href="../assets/img/logo_pensil.jpg" type="image/x-icon">
        <link href="../css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" style="letter-spacing: 0.07em;" href="landing_page.php">TOKO ATK</a>
            <div class="navbar-collapse bg-dark">
                <ul class="navbar-nav ms-auto py-lg-0 text-right">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase text-info" href="detail/pesanan.php">pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase text-info" href="../BE/admin.php">dashboard</a>
                    </li>
                </ul>
            </div>
        </nav>

        <header class="bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 py-3 py-lg-5 text-center">
                        <h1 class="display-4" style="letter-spacing: 0.07em;">Toko Alat Tulis</h1>
                        <p class="lead mb-0">Toko yang menyediakan berbagai macam alat tulis yang berkualitas</p>
                        <br>
                        <button class="btn btn-info text-uppercase">
                            <a href="#produk" class="text-white" style="text-decoration: none;">produk</a>
                        </button>
                    </div>
                    <div class="col-lg-5 py-3">
                        <img class="img-fluid rounded mb-4 mb-lg-0" src="../assets/img/toko.jpg" alt="..." />
                </div>
            </div>
        </header>

        <menu class="m-0 bg-info" id="produk" style="padding-inline-end: 40px;">
        <br>
        <div class="container">
        <div class="row">
            <?php 
            $sql = "SELECT * FROM produk";
            $rs = $dbh->query($sql);
            ?>
            <?php 
            foreach($rs as $row){
            ?>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body bg-info rounded justify-content-center text-center">
                        <img style="width: 200px;" src="../assets/img/alat.jpg" class="img-thumbnail rounded mx-auto d-block"  alt="Foto Tempat ATK">
                        <p class="pt-3 mb-0 text-black"><?=$row['nama']?></p>
                        <p class="pt-3 text-black"><?=('Rp. '.number_format($row['harga'],0,".","."));?></p>
                        <a class="btn btn-success" href="detail/view_pesanan.php?id=<?=$row['id']?>">Lihat Produk</a>
                    </div>
                </div>
            </div>
            <?php
            } 
            ?>
        </div>
        </div>
        <br>
        </menu>

        <footer class="text-center p-2 bg-dark">
            <div class="row align-items-center">
                <div class="col-lg-5 text-lg-start text-white">Copyright &copy; Aulia Rahman Mahyuddin 2023</div>
                <div class="col-lg-7 text-lg-end py-2"> 
                    <a class="btn btn-info mx-2 rounded-circle" href="https://www.instagram.com/a_rahman_12/" aria-label="Instagram" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="btn btn-info rounded-circle" href="https://www.linkedin.com/in/aulia-rahman-mahyuddin-7b4470227/" aria-label="linkedin" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
    </body>
</html>