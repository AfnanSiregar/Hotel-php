<?php 
    include "Kamar.php";

    $cek = $_POST['cek'];
    $act = $_POST['act'];
    
    if($cek == 'tb_rooms'){
        if($act == 'update'){
            $data = new Kamar();
            $id_room = $_POST['id_room'];
            $data->updateKamar($id_room);
        }
    }

?>