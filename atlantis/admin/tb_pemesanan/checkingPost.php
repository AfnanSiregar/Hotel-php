<?php 
    include "Pemesanan.php";

    $cek = $_POST['cek'];
    $act = $_POST['act'];
    
    if($cek == 'tb_pemesanan'){
        if($act == 'update'){
            $data = new Pemesanan();
            $id_pemesanan = $_POST['id_pemesanan'];
            $data->updatePemesanan($id_pemesanan);
        }
    }

?>