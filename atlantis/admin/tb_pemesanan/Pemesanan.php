<?php

    include "../databaseAdmin/dbAdmin.php";

    class Pemesanan extends dbAdmin{

        public function readPemesanan(){
            $data = mysqli_query($this->connect, "SELECT * FROM tb_pemesanan");
            return $data;           
        }

        public function showPemesanan($id_pemesanan)
        {
            $data2 = mysqli_query($this->connect, "SELECT * FROM tb_pemesanan WHERE id_pemesanan = $id_pemesanan");
            return $data2;
        }

        public function updatePemesanan($id_pemesanan)
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

            mysqli_query($this->connect, "UPDATE tb_pemesanan SET nama_pemesan = '$nama_pemesan', 
            email_pemesan = '$email_pemesan', passpem = '$passpem', room = '$room', tgl_masuk = '$tgl_masuk',  
            tgl_keluar = '$tgl_keluar', jmlh_org = '$jmlh_org', no_rek = '$no_rek', konfirmasi = '$konfirmasi' 
            WHERE id_pemesanan = '$id_pemesanan'");

            header("location: index.php");
        }

    }
?>