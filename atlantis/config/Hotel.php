<?php
    
    include "../atlantis/database/Database.php";

    class Hotel extends Database{
        public function readRoom(){
            $data = mysqli_query($this->connect, "SELECT * FROM tb_rooms");
            return $data;           
        }

        public function readRoom1(){
            $data = mysqli_query($this->connect, "SELECT * FROM tb_rooms WHERE id_room = 1");
            return $data;           
        }

        public function readRoom2(){
            $data = mysqli_query($this->connect, "SELECT * FROM tb_rooms WHERE id_room = 2");
            return $data;
        }

        public function readRoom3(){
            $data = mysqli_query($this->connect, "SELECT * FROM tb_rooms WHERE id_room = 3");
            return $data;
        }

        public function readRoom4(){
            $data = mysqli_query($this->connect, "SELECT * FROM tb_rooms WHERE id_room = 4");
            return $data;
        }

        public function readRoom5(){
            $data = mysqli_query($this->connect, "SELECT * FROM tb_rooms WHERE id_room = 5");
            return $data;
        }

        public function readRoom6(){
            $data = mysqli_query($this->connect, "SELECT * FROM tb_rooms WHERE id_room = 6");
            return $data;
        }     
    }
?>