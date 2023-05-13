<?php
require_once '../../BE/dbkoneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Toko Alat Tulis</title>
        <link rel="icon" href="../../assets/img/logo_pensil.jpg" type="image/x-icon">
        <link href="../../css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" style="letter-spacing: 0.07em;" href="../landing_page.php">TOKO ATK</a>
            <div class="navbar-collapse">
                <ul class="navbar-nav ms-auto py-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase text-info" href="../../FE/detail/pesanan.php">pesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase text-info" href="../../BE/admin.php">dashboard</a>
                    </li>
                </ul>
            </div>
        </nav>

        <section class="bg-warning">
            <?php
                $_id = $_GET['id'];
                $sql = "SELECT * FROM produk WHERE id =?";
                $st = $dbh->prepare($sql);
                $st->execute([$_id]);
                $row = $st->fetch();
            ?>
            <div class="bg-info">
                <h3 class="text-center text-uppercase text-white py-4">Detail Alat Tulis</h3>
            </div>
            <div class="bg-warning py-3">           
                <div class="col-sm-6 mb-4 mx-auto">
                    <img style="width:100%; height:60%" src="../../assets/img/alat.jpg" class="img-fluid mx-auto d-block"  alt="Foto Tempat ATK">
                    <div class="bg-white text-center py-2">
                        <table>
                            <tr>
                                <th class="col-lg-4">
                                    <h6 class="text-uppercase text-info">Nama Alat Tulis</h6>
                                </th>
                                <td class="col-lg-4">
                                </td>
                                <td class="col-lg-4">
                                    <h6 class="text-uppercase text-info"><?=$row['nama']?></h6>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-lg-4">
                                    <h6 class="text-uppercase text-info">Harga</h6>
                                </th>
                                <td class="col-lg-4">
                                </td>
                                <td class="col-lg-4">
                                    <h6 class="text-uppercase text-info"><?=('Rp. '.number_format($row['harga'],0,".","."));?></h6>
                                </td>
                            </tr>
                            <tr>
                                <th class="col-lg-4">
                                    <h6 class="text-uppercase text-info">Stok</h6>
                                </th>
                                <td class="col-lg-4">
                                </td>
                                <td class="col-lg-4">
                                    <h6 class="text-uppercase text-info"><?=$row['stok']?></h6>
                                </td>
                            </tr>
                        </table>
                        <table class="d-flex justify-content-center">
                            <tr class="text-uppercase">
                                <td>
                                    <a href="../landing_page.php#produk" class="btn btn-danger">Kembali</a>
                                    <a href="pesanan.php?id=<?=$row['id']?>" class="btn btn-success">Beli</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </section>

        <footer class="text-center p-2 bg-dark">
            <div class="row align-items-center">
                <div class="col-lg-5 text-lg-start text-white">Copyright &copy; Aulia Rahman Mahyuddin 2023</div>
                <div class="col-lg-7 text-lg-end py-2"> 
                    <a class="btn btn-info mx-2 rounded-pill" href="https://www.instagram.com/a_rahman_12/" aria-label="Instagram" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="btn btn-info rounded-pill" href="https://www.linkedin.com/in/aulia-rahman-mahyuddin-7b4470227/" aria-label="linkedin" target="_blank">
                        <i class="fab fa-linkedin"></i>
                    </a>
                </div>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../../js/scripts.js"></script>
    </body>
</html>