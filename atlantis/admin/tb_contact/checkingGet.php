<?php 
    include "Contact.php";

    $cek = $_GET['cek'];
    $act = $_GET['act'];
    
    if($cek == 'tb_contact'){
        if($act == 'delete'){
            $data = new Contact();
            $id_nama = $_GET['id_nama'];
            $data->deleteContact($id_nama);
        }
    }

?>