<?php 
    include "Pemesanan.php";

    $cek = $_GET['cek'];
    $act = $_GET['act'];
    
    if($cek == 'tb_pemesanan'){
       if($act == 'edit'){
            $id_pemesanan = $_GET['id_pemesanan'];
            // var_dump($id_room, $act, $cek);
            header("location: cetak.php?id_pemesanan=".$id_pemesanan);
        }
    }

?>