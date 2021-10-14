<?php 
    session_start(); 

    if($_GET['process']){
        if (isset($_SESSION['username_dangnhap'])){
            session_destroy();
            header('Location: ../index.php');
        }
    }
    else{
        echo'ko';
    }

?>
