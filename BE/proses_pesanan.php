<?php 
require_once 'dbkoneksi.php';
?>
<?php 
if(isset($_POST['proses'])){
    $_nama = $_POST['np'];
    $_alamat = $_POST['alamat'];
    $_tanggal = $_POST['tanggal'];
    $_produk_id = $_POST['produk_id'];
    $_quantity = $_POST['quantity'];
    $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_nama; // ? 1
   $ar_data[]=$_alamat; // ? 2
   $ar_data[]=$_tanggal; // ? 3
   $ar_data[]=$_produk_id; // ? 6
   $ar_data[]=$_quantity; // ? 6


   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO pesanan (np,alamat,tanggal,produk_id,quantity) VALUES (?,?,?,?,?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE pesanan SET np=?,alamat=?,tanggal=?,produk_id=?,quantity=? WHERE id=?";
   }
}

   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   // header('location:daftar_pesanan.php');
   echo '<meta http-equiv="refresh" content="0; url=daftar_pesanan.php">';
?>