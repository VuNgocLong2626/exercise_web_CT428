<?php session_start(); 

    if($_GET['process']){
        if (isset($_SESSION['username'])){
            unset($_SESSION['username']);
            header('Location: ./index.php');
        }
    }
    else{
        echo'ko';
    }

?>
