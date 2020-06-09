<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Tambah Barang</title>
<style type="text/css">
      * {
        font-family:Arial, Helvetica, sans-serif;
      }
    .konten {
      width: 50%;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<?php
$kd_brg = $_GET['kd_brg'];
$sql = mysqli_query($koneksi, "SELECT * FROM kategori,barang WHERE kategori.kd_kat=barang.kd_kat AND kd_brg='$kd_brg'");
while($data = mysqli_fetch_array($sql)){
?>
<div class="konten">
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="kd_brg" value="<?php echo $data['kd_brg'];?>">
            <label>Nama Kategori Barang</label>
            <select class="browser-default custom-select" name="kd_kat" value="<?php echo $data['kd_kat'];?>" required="">
            <option value="">Pilih Nama kategori Barang..</option>
                                                                           
<?php 
$sql2 = mysqli_query($koneksi, "SELECT * FROM kategori");
while($data2= mysqli_fetch_array($sql2)){
 ?>
<option value="<?php echo $data2['kd_kat'] ?>">
<?php echo $data2['nm_kat'] ;?></option>


<?php
}
?>
            </select>
<br><br>                                 
    <Label>Nama Kategori</Label>
        <input class="form-control" type="text" name="nm_brg" value="<?php echo $data['nm_brg'];?>"required="required">
        <br>
    <Label>Harga Barang</Label>
        <input class="form-control" type="text" name="hrg_barang" value="<?php echo $data['hrg_barang'];?>"required="required">
        <br>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Update Barang</button>
        <button class="btn btn-secondary btn-lg btn-block" onclick="window.location='index.php';return false;">Batal</button>

<?php
}
?>

</form>
</div>
</body>
</html>