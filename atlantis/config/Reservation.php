<?php
    
    include "../database/Database.php";

    class Reservation extends Database{
        public function reserve()
        {
                $nama_pemesan = $_POST['nama_pemesan'];
                $email_pemesan = $_POST['email_pemesan'];
                $passpem = $_POST['passpem'];
                $room = $_POST['room'];
                $tgl_masuk = $_POST['tgl_masuk'];
                $tgl_keluar = $_POST['tgl_keluar'];
                $jmlh_org = $_POST['jmlh_org'];
                $no_rek = $_POST['no_rek'];
                $konfirmasi = $_POST['konfirmasi'];

                $cek = mysqli_num_rows(mysqli_query($this->connect, "SELECT * FROM tb_pemesanan WHERE 
                nama_pemesan = '$nama_pemesan' or email_pemesan = '$email_pemesan'"));
                if($cek > 0){
                    return true;
                }else{
                    mysqli_query($this->connect, "INSERT INTO tb_pemesanan VALUES ('','$nama_pemesan', '$email_pemesan',
                    '$passpem','$room','$tgl_masuk','$tgl_keluar','$jmlh_org','$no_rek','$konfirmasi')");
                    
                    echo
                    "<script>
                    alert('Permintaan Pemesanan Terkirim!');
                    window.location.href='../reservation.php';
                    </script>";     
                }
        }

        public function readReserve()
        {
            $data = mysqli_query($this->connect, "SELECT * FROM tb_pemesanan");
            return $data;           
        }
       
    }
?>