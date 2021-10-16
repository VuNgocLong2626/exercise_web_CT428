<?php 
    session_start(); 

    if(isset($_GET['process'])){
        if (isset($_SESSION['username_dangnhap'])){
            // unset($_SESSION['username_dangnhap']);
            session_destroy();
            header('Location: ./index.php');
        }
    }
    if(isset($_POST['dangN'])){
        $tk = $_POST['telephone'];
        $mk = $_POST['password'];
    }
    if(isset($_POST['dangK'])){
        echo 'Dang Ky';
    }
?>
