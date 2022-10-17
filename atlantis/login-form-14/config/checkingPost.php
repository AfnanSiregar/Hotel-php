<?php
    include "Login.php";

    session_start();

    $act = $_POST['act'];
    $cek = $_POST['cek'];
    $data = new Login();

    if($cek == 'login'){
        if($act == 'login'){
            if($data->login()){
                $_SESSION['loginAdmin'] = true;
                $_SESSION['username'] = $username;                
                header("location: ../../admin/tb_pemesanan/index.php");
            }else{
                echo
                "<script>
                alert('Email atau Password Salah!');
                window.location.href='../index.php';
                </script>";
            }
        }elseif($act == 'loginUser'){
            if($data->loginUser()){
                $data = $data->loginUser();
                $_SESSION['nama'] = $data['nama_pemesan'];
                $_SESSION['email'] = $data['email_pemesan'];
                $_SESSION['room'] = $data['room'];
                $_SESSION['masuk'] = $data['tgl_masuk'];
                $_SESSION['keluar'] = $data['tgl_keluar'];
                $_SESSION['jumlah'] = $data['jmlh_org'];
                $_SESSION['rek'] = $data['no_rek'];
                $_SESSION['konfirmasi'] = $data['konfirmasi'];
                $_SESSION['login'] = true;          
                $id_pemesanan = $query['id_pemesanan'];                
                header("location: ../../user/index.php");
            }else{
                echo
                "<script>
                alert('Email atau Password Salah!');
                window.location.href='../userLogin.php';
                </script>";
            }
        }
    }
?>