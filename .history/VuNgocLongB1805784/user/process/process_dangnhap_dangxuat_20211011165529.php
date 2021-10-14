<?php 
    session_start(); 

    if($_GET['process'] == 0){
        if (isset($_SESSION['username_dangnhap'])){
            unset($_SESSION['username_dangnhap']);
            header('Location: ../index.php');
        }
    }
    else{
        echo'ko';
    }

?>
