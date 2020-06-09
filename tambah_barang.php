<?php
  include('koneksi.php');
  $query = "SELECT * FROM kategori ORDER BY kd_kat DESC";

  $result = mysqli_query($koneksi, $query);
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
      <div class="konten">
        <h1>Tambah Produk</h1>
      <form method="POST" action="proses_barang.php" enctype="multipart/form-data" >
      <div class="form-group">
          <label>Nama Barang</label>
          <input class="form-control" type="text" name="nm_brg" autofocus="" required="" />
  </div>
  <Label>Harga Barang</Label>
  <div class="input-group mb-3">
    
  <div class="input-group-prepend">
    <span class="input-group-text">Rp</span>
  </div>
         <input class="form-control" type="text" name="hrg_barang" required=""/>
  </div>
  <div class="form-group">
        <label>Nama Kategori Barang</label>
        <select class="browser-default custom-select" name="kd_kat" required="">
<option value="">Pilih Nama kategori Barang</option>
                                                                           
<?php 
while($data2= mysqli_fetch_assoc($result)){
 ?>                                   
<option value="<?php echo $data2['kd_kat'] ?>">
<?php echo $data2['nm_kat'] ;?></option>
<?php
}
?>
</select>
  </div>
      <button class="btn btn-primary btn-lg btn-block" type="submit">Simpan Barang</button>
     <button class="btn btn-secondary btn-lg btn-block" onclick="window.location='index.php';return false;">Batal</button>

      </form>
</div>
  </body>
</html>