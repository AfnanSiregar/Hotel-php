<?php

    include "../databaseAdmin/dbAdmin.php";

    class Kamar extends dbAdmin{

        public function readKamar(){
            $data = mysqli_query($this->connect, "SELECT * FROM tb_rooms");
            return $data;           
        }

        public function showKamar($id_room)
        {
            $data2 = mysqli_query($this->connect, "SELECT * FROM tb_rooms WHERE id_room = $id_room");
            return $data2;
        }

        public function updateKamar($id_room)
        {
            $nama_room = $_POST['nama_room'];
            $harga = $_POST['harga'];
            $deskripsi = $_POST['deskripsi'];

            mysqli_query($this->connect, "UPDATE tb_rooms SET nama_room = '$nama_room', 
            harga = '$harga', deskripsi = '$deskripsi' WHERE id_room = '$id_room'");
            header("location: index.php");
        }
    }
?>