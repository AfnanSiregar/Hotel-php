<?php    
    include "Contact.php";

    $cek = $_POST['cek'];
    $act = $_POST['act'];

    if($cek == 'tb_contact'){
        $act == 'create';
            $data = new Contact();
            if($data->sendMessage()){
                echo "<script>window.alert('nama atau email yang anda masukan sudah ada')
                window.location='../contact.php'</script>";
            }
    }

?>