<?php
    include "../database/Database.php";

    class Contact extends Database{
        public function sendMessage()
        {
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            $cek = mysqli_num_rows(mysqli_query($this->connect, "SELECT * FROM tb_contact WHERE 
            fname = '$fname' or lname = '$lname' or email = '$email'"));
            if($cek > 0){
                return true;
            }else{
                mysqli_query($this->connect, "INSERT INTO tb_contact VALUES ('','$fname', '$lname', '$email','$message')");

                echo
                "<script>
                alert('Pesan Terkirim!');
                window.location.href='../contact.php';
                </script>";     
                }
        }

        public function readContact()
        {
            $data = mysqli_query($this->connect, "SELECT * FROM tb_contact");
            return $data;           
        }
    }
?>