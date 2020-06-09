<?php
  include('koneksi.php'); 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Data Barang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
      * {
        font-family:Arial, Helvetica, sans-serif;
      }
    .konten {
      width: 100%;
      height: auto;
      padding: 20px;
     text-align: center;
    }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  </head>
  <body>
    <div class="konten">
    <h1>Data Barang</h1>
   <a class="btn btn-success" href="tambah_barang.php">+ &nbsp; Tambah Barang</a>
<a class="btn btn-info" href="tambah_kategori.php">+ &nbsp; Tambah Kategori</a>
  <br>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>No</th>
          <th>Nama Produk</th>
          <th>Harga Barang</th>
          <th>Kategori</th>
          <th>Tanggal</th>
          <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM kategori,barang WHERE kategori.kd_kat=barang.kd_kat";
      $result = mysqli_query($koneksi, $query);
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }
      $no = 1; 
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
         <td><?php echo $no++; ?></td>
          <td><?php echo $row['nm_brg']; ?></td>
          <td>Rp <?php echo number_format($row['hrg_barang'],0,',','.'); ?></td>
          <td><?php echo $row['nm_kat']; ?></td>
          <td><?php echo substr($row['tanggal'], 0, 20); ?></td>
            <td>  <a class="btn btn-warning" href="edit.php?kd_brg=<?php echo $row['kd_brg']; ?>">Edit</a> |
              <a class="btn btn-danger" href="hapus.php?kd_brg=<?php echo $row['kd_brg']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
      <?php
      }
      ?>
    </tbody>
    </table>
    </div>
  </body>
</html>