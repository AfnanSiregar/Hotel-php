<?php    
    include "Reservation.php";

    $cek = $_POST['cek'];
    $act = $_POST['act'];

    if($cek == 'tb_pemesanan'){
        $act == 'create';
            $data = new Reservation();
            if($data->reserve()){
                echo "<script>window.alert('nama atau email yang anda masukan sudah ada')
                window.location='../reservation.php'</script>";
            }
    }

?>