<?php
    include "./mysql_connect.php";
    session_start();

    if(isset($_POST['dangxl'])){
        echo $_GET['sohd'];
        // $conn->query("UPDATE dathang SET TrangThai= 'Đang xử lý', MSNV ='".$_SESSION['msnv']."'  WHERE SoDonDH='".$_POST['sohd']."'");
        // header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    if(isset($_POST['daht'])){

    }
?>