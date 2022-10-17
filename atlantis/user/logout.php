<?php 
 
    session_start();
    session_destroy();
    
    header("Location: ../login-form-14/userLogin.php");
 
?>