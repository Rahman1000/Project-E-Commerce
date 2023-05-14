<?php 
require_once '../dbkoneksi.php';
?>
<?php 
   $_nama_merk = $_POST['nama_merk'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_nama_merk; // ? 1

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO merk (nama_merk) VALUES (?)";
   }else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE merk SET nama_merk=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   // header('location:jenis_produk.php');
   echo '<meta http-equiv="refresh" content="0; url=jenis_produk.php">';
?>