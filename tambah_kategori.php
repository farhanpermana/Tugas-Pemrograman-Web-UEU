<?php
  include('koneksi.php');
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tambah Kategori</title>
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
        <h1>Tambah Kategori</h1>
      <form method="POST" action="proses_kategori.php" enctype="multipart/form-data" >
          <label>Nama Kategori</label>
          <input class="form-control" type="text" name="nm_kat" autofocus="" required="" />
          <br>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Tambah Kategori</button>
        <button class="btn btn-secondary btn-lg btn-block" onclick="window.location='index.php';return false;">Batal</button>
        </section>
      </form>
      </div>
  </body>
</html>