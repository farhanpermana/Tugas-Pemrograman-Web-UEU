<?php

include 'koneksi.php';

$kd_brg = $_POST['kd_brg'];
$kd_kat = $_POST['kd_kat'];
$nm_brg = $_POST['nm_brg'];
$hrg_barang = $_POST['hrg_barang'];

$query = mysqli_query($koneksi,"UPDATE barang SET kd_brg='$kd_brg',kd_kat='$kd_kat',nm_brg='$nm_brg', hrg_barang='$hrg_barang' WHERE kd_brg='$kd_brg'");

if($query){
echo "<script>alert('Data berhasil diPerbaharui');
window.location = 'index.php';</script>";
}else{
 echo "<script>alert('Data Gagal diPerbaharui');
window.location = 'index.php';</script>";
}
        
?>