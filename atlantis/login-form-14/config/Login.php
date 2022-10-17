<?php
    include "../database/loginDatabase.php";

    class Login extends loginDatabase{
        public function login()
        { 
            session_start();

            $username = $_POST['username'];
            $passmin = $_POST['passmin'];

            $query = mysqli_query($this->connect, "SELECT * FROM tb_admin WHERE username='$username' && passmin='$passmin'");
            $total = mysqli_num_rows($query);

            if($total === 1){
                return true;
            }else{
                return false;
            }
        }

        public function loginUser()
        { 
            session_start();

            $email = $_POST['email_pemesan'];
            $passpem = $_POST['passpem'];

            $query = mysqli_query($this->connect, "SELECT * FROM tb_pemesanan WHERE email_pemesan='$email'
            AND passpem='$passpem'")->fetch_assoc();
            return $query;
        }
    }
?>