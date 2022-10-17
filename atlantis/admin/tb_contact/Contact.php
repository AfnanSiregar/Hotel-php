<?php

    include "../databaseAdmin/dbAdmin.php";

    class Contact extends dbAdmin{

        public function readUlasan(){
            $data = mysqli_query($this->connect, "SELECT * FROM tb_contact");
            return $data;           
        }

        public function deleteContact($id_nama)
        {
            mysqli_query($this->connect, "DELETE FROM tb_contact WHERE id_nama = $id_nama");
            header("location: index.php");
        }


    }
?>