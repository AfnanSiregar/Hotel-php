<?php
  error_reporting(0);

  session_start();
  if($_SESSION['loginAdmin'] == false){
    echo"<script>window.location.href='../../login-form-14/index.php';</script>";
  }

  include "Kamar.php";
  $data = new Kamar();
  $no = 1;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Kamar</title>
  </head>

  <body style="background: url(wp4632219-scenery-anime-aesthetic-wallpapers.jpg); background-attachment: fixed;">

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header p-3 mb-2 bg-info">
              <a href="#" class="text-white card-header btn">DATA KAMAR</a> |
              <a href="../tb_contact/index.php" class="btn btn-secondary btn-sm">DATA ULASAN</a> |
              <a href="../tb_pemesanan/index.php" class="btn btn-secondary btn-sm">DATA PEMESANAN</a> |
              <!-- <a href="../tb_penerima/index.php" class="btn btn-warning btn-sm">DATA PENERIMA</a> |  -->
              <a href="logout.php" class="btn btn-warning btn-sm">LOGOUT</a> 
            </div>
            <div class="card-body">
              <!-- <a href="tambah.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a> -->
              <table class="table table-bordered" id="myTable">
                <thead align="center">
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">HARGA</th>    
                    <th scope="col">DESKRIPSI</th>
                    <th scope="col">OPSI</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($data->readKamar() as $key) : ?>
                  <tr align="center">
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $key['nama_room'] ?></td>
                      <td><?php echo $key['harga']; ?></td>
                      <td><?php echo $key['deskripsi'] ?></td>
                      <?php $id = $key['id_room'] ?>
                      <td class="text-center">
                        <a href="checkingGet.php?act=edit&cek=tb_rooms&id_room=<?php echo $id ?>" class="btn btn-sm btn-primary">EDIT</a>
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