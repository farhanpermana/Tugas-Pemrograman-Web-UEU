<?php
include 'koneksi.php';
$kd_kategori = $_POST['kd_kat'];
$nama_barang = $_POST['nm_brg'];
$harga_barang = $_POST['hrg_barang'];
$tanggal = date("Y-m-d H:i:s");
$sql = "INSERT INTO barang VALUES('','$kd_kategori','$nama_barang','$harga_barang',CURRENT_TIME())";
$query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
if($query){
echo "<script>alert('Data Barang BERHASIL Disimpan'); 
window.location = 'index.php';</script>";
} else {
echo "<script>alert('DataBarang GAGAL Disimpan'); 
window.location = 'index.php';</script>";
}
?>

