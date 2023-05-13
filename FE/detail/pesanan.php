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
            <div class="bg-info">
                <h3 class="text-center text-uppercase text-white py-4">Pesan Alat Tulis</h3>
            </div>
            <div class="bg-warning py-5 h-75">           
                <form method="POST" action="../../BE/proses_pesanan.php">
                    <div class="form-group row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label for="np" class="input-group-text">
                                        <i class="fa fa-user"></i>
                                    </label>
                                </div> 
                                <input id="np" name="np" type="text" class="form-control" placeholder="Masukkan Nama Anda" required="required"
                                value="">
                            </div>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label for="alamat" class="input-group-text">
                                        <i class="fa fa-home"></i>
                                    </label>
                                </div> 
                                <input id="alamat" name="alamat" type="text" class="form-control" placeholder="Masukkan Alamat Anda" required="required"
                                value="">
                            </div>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label for="tanggal" class="input-group-text">
                                        <i class="fa fa-calendar-days"></i>
                                    </label>
                                </div> 
                                <input id="tanggal" name="tanggal" type="date" class="form-control" required="required"
                                value="">
                            </div>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4"></div>
                        <div class="col-4">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <label for="produk_id" class="input-group-text">
                                    <i class="fa fa-book"></i>
                                </label>
                            </div> 
                            <select name="produk_id" id="produk_id" class="custom-select">
                                <?php
                                    $sql = "SELECT * FROM produk";
                                    $rs = $dbh->query($sql);
                                    // $_id = $_GET['id'];
                                    // $sql = "SELECT * FROM produk WHERE id =?";
                                    // $st = $dbh->prepare($sql);
                                    // $st->execute([$_id]);
                                    // $row = $st->fetch();
                                    foreach ($rs as $row) {
                                        echo "<option value='".$row['id']."'>".$row['nama']."</option>";
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="col-4"></div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <label for="quantity" class="input-group-text">
                                        <i class="fa fa-list-ol"></i>
                                    </label>
                                </div> 
                                <input id="quantity" name="quantity" type="number" class="form-control" placeholder="Jumlah" required="required"
                                value="">
                            </div>
                        </div>
                        <div class="col-4"></div>
                    </div>
                    <div class="form-group row">
                        <div class="col-4"></div>
                        <div class="text-center col-4">
                        <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Simpan"/>   
                        </div>
                        <div class="col-4"></div>
                    </div>
                </form>
            </div>
        </section>

        <footer class="text-center p-2 bg-dark fixed-bottom">
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