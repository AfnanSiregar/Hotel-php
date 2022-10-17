<?php
  error_reporting(0);

  session_start();
  if($_SESSION['loginAdmin'] == false){
    echo"<script>window.location.href='../../login-form-14/index.php';</script>";
  }

  include "Pemesanan.php";
  $data = new Pemesanan();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Pemesanan</title>
  </head>

  <body style="background: url(wp4632219-scenery-anime-aesthetic-wallpapers.jpg); background-attachment: fixed;">
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-13">
          <div class="card">
            <div class="p-3 mb-2 bg-info card-header">
              <a href="#" class="text-white card-header btn">DATA PEMESANAN</a> |
              <a href="../tb_contact/index.php" class="btn btn-secondary btn-sm">DATA ULASAN</a> |
              <a href="../tb_rooms/index.php" class="btn btn-secondary btn-sm">DATA KAMAR</a> |
              <a href="logout.php" class="btn btn-warning btn-sm">LOGOUT</a> 
            </div>
            <div class="card-body" >
              <table class="table table-bordered" id="myTable">
                <thead align="center">
                  <tr>
                    <th scope="col">NAMA</th>
                    <th scope="col">EMAIL</th>    
                    <th scope="col">KAMAR</th>
                    <th scope="col">TANGGAL MASUK</th>
                    <th scope="col">TANGGAL KELUAR</th>
                    <th scope="col">JUMLAH</th>
                    <th scope="col">NO. REKENING</th>
                    <th scope="col">STATUS</th>
                    <th scope="col">OPSI</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($data->readPemesanan() as $key) : ?>
                  <tr align="center">
                      <td><?php echo $key['nama_pemesan'] ?></td>
                      <td><?php echo $key['email_pemesan']; ?></td>
                      <td><?php echo $key['room'] ?></td>
                      <td><?php echo $key['tgl_masuk'] ?></td>
                      <td><?php echo $key['tgl_keluar'] ?></td>
                      <td><?php echo $key['jmlh_org'] ?></td>
                      <td><?php echo $key['no_rek'] ?></td>
                      <td><?php echo $key['konfirmasi'] ?></td>
                      <?php $id = $key['id_pemesanan'] ?>
                      <td class="text-center">
                        <a href="checkingGet.php?act=edit&cek=tb_pemesanan&id_pemesanan=<?php echo $id ?>" class="btn btn-sm btn-primary">LIHAT</a>
                      </td>
                  </tr>
                <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>