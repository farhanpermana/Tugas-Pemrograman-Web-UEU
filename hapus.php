<?php

include 'koneksi.php';

$kd_brg = $_GET['kd_brg'];

$sql = "DELETE FROM barang WHERE kd_brg = $kd_brg";
$query = mysqli_query($koneksi, $sql)
or die (mysqli_error($koneksi));

if ($sql) {
echo "<script>alert('Data BERHASIL dihapus');
window.location = 'index.php';</script>";
} else {
echo "<script>alert('Data GAGAL dihapus');
window.location = 'index.php';</script>";
}


?>