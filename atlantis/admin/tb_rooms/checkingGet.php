<?php 
    include "Kamar.php";

    $cek = $_GET['cek'];
    $act = $_GET['act'];
    
    if($cek == 'tb_rooms'){
       if($act == 'edit'){
            $id_room = $_GET['id_room'];
            header("location: edit.php?id_room=".$id_room);
        }
    }

?>