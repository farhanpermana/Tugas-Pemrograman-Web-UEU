<?php
include 'koneksi.php';
$nama_kategori = $_POST['nm_kat'];
$sql = "INSERT INTO kategori(nm_kat)
VALUES('$nama_kategori')";
$query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
if($query){
echo "<script>alert('Data Kategori Barang BERHASIL Disimpan');
window.location = 'index.php';</script>";
} else {
echo "<script>alert('Data Kategori Barang GAGAL Disimpan');
window.location = 'index.php';</script>";
}
?>