<?php 
require_once '../dbkoneksi.php';
$_iddel=$_GET['iddel'];
// $sql = "DELETE produk.*,merk.* FROM produk LEFT JOIN merk ON produk.merk_id = merk.id WHERE produk.id=?";
$sql = "DELETE FROM produk WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_iddel]);
// redirect page
header('location:produk.php');
?>