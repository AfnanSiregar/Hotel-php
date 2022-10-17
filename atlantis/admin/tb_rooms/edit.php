<?php
      error_reporting(0);

      session_start();
      if($_SESSION['loginAdmin'] == false){
        echo"<script>window.location.href='../../login-form-14/index.php';</script>";
      }
    
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Data</title>
  </head>

  <body style="background: url(wp4632219-scenery-anime-aesthetic-wallpapers.jpg); background-attachment: fixed;">

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT KAMAR
            </div>
            <div class="card-body">
              <?php
                include "Kamar.php";
                $kamar = new Kamar();
                $id_room = $_GET['id_room'];            
              ?>
              <?php foreach($kamar->showKamar($id_room) as $key) : ?>
              <form action="checkingPost.php" method="POST">
                <div class="form-group">
                  <label>NAMA KAMAR</label>

                  <input type="hidden" name="cek" value="tb_rooms">
                  <input type="hidden" name="act" value="update">

                  <input type="hidden" name="id_room" value="<?= $key['id_room']?>" class="form-control">
                  <input type="text" name="nama_room" value="<?= $key['nama_room']?>" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>HARGA</label>
                  <input type="text" name="harga" value="<?= $key['harga']?>" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>DESKRIPSI</label>
                  <input type="text" name="deskripsi" value="<?= $key['deskripsi']?>" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success">UPDATE</button>
                <input type="button" value="Kembali" class="btn btn-danger" onclick="history.back()">
                <?php endforeach; ?>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>