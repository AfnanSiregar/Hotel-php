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
    <title>CETAK</title>
  </head>

  <body style="background: url(wp4632219-scenery-anime-aesthetic-wallpapers.jpg); background-attachment: fixed;">
    <div class="container " style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card ">
            <div class="p-3 mb-2 bg-primary text-white card-header">
              CETAK
            </div>
            <div class="card-body">
              <?php
                include "Pemesanan.php";
                $pemesanan = new Pemesanan();
                $id_pemesanan = $_GET['id_pemesanan'];            
              ?>
              <?php foreach($pemesanan->showPemesanan($id_pemesanan) as $key) : ?>
              <form action="checkingPost.php" method="POST">
                <div class="form-group">
                  <label>NAMA</label>

                  <input type="hidden" name="cek" value="tb_pemesanan">
                  <input type="hidden" name="act" value="update">

                  <input type="hidden" name="id_pemesanan" value="<?= $key['id_pemesanan']?>">
                  <input type="text" name="nama_pemesan" value="<?= $key['nama_pemesan']?>" class="form-control"  required>
                </div>

                <div class="form-group">
                  <label>EMAIL</label>
                  <input type="text" name="email_pemesan" value="<?= $key['email_pemesan']?>" class="form-control" required>
                </div>

                <input type="hidden" name="passpem" value="<?= $key['passpem']?>">
                
                <div class="form-group">
                  <label>KAMAR</label>
                  <input type="text" name="room" value="<?= $key['room']?>" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>ENTRY DATE</label>
                  <input type="text" name="tgl_masuk" value="<?= $key['tgl_masuk']?>" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>OUT DATE</label>
                  <input type="text" name="tgl_keluar" value="<?= $key['tgl_keluar']?>" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>JUMLAH ORANG</label>
                  <input type="text" name="jmlh_org" value="<?= $key['jmlh_org']?>" class="form-control" required>
                </div>

                <input type="hidden" name="no_rek" value="<?= $key['no_rek']?>">
                
                <div class="form-group">
                  <label>STATUS</label>
                  <div class="form-check">
                    <input class="form-check-input" type="Radio" id="flexRadioDefault1" name="konfirmasi" value="DIKONFIRMASI" required>
                    <label class="form-check-label" for="flexRadioDefault1">KONFIRMASI</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="Radio" id="flexRadioDefault2" name="konfirmasi" value="DITOLAK" required>
                    <label class="form-check-label" for="flexRadioDefault2">TOLAK</label>   
                  </div>
                </div>

                
                <button class="btn btn-warning" type="submit">UPDATE</button>                
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