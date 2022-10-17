<?php
  error_reporting(0);

  session_start();
  if($_SESSION['loginAdmin'] == false){
  echo"<script>window.location.href='../../login-form-14/index.php';</script>";
}

  include "Contact.php";
  $data = new Contact();
  $no = 1;
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Ulasan</title>
  </head>

  <body style="background: url(wp4632219-scenery-anime-aesthetic-wallpapers.jpg); background-attachment: fixed;">

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="p-3 mb-2 bg-info card-header">
                <a href="#" class="text-white card-header btn">DATA ULASAN</a> |
                <a href="../tb_pemesanan/index.php" class="btn btn-secondary btn-sm">DATA PEMESANAN</a> |
                <a href="../tb_rooms/index.php" class="btn btn-secondary btn-sm">DATA KAMAR</a> |
                <!-- <a href="../tb_pengirim/index.php" class="btn btn-warning btn-sm">DATA PENGIRIM</a> | -->
                <a href="logout.php" class="btn btn-warning btn-sm">LOGOUT</a> 

            </div>
            <div class="card-body">
              <table class="table table-bordered" id="myTable">
                <thead align="center">
                  <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAMA DEPAN</th>
                    <th scope="col">NAMA AKHIR</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">ULASAN</th>
                    <th scope="col">OPSI</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($data->readUlasan() as $key) : ?>
                  <tr align="center">
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $key['fname'] ?></td>
                      <td><?php echo $key['lname'] ?></td>
                      <td><?php echo $key['email'] ?></td>
                      <td><?php echo $key['message'] ?></td>
                      <?php $id = $key['id_nama'] ?>
                      <td class="text-center"><a class="btn btn-sm btn-danger" href="checkingGet.php?act=delete&cek=tb_contact&id_nama=<?php echo $id ?>">HAPUS</a></td>
                  <?php endforeach; ?>
                  </tr>
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