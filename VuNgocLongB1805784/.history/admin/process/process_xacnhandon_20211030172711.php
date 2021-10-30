<?php
    include "./mysql_connect.php";
    session_start();

    if(isset($_POST['dangxl'])){
        $conn->query("UPDATE dathang SET TrangThaiHD= 'Đang xử lý', MSNV ='".$_SESSION['msnv']."'  WHERE SoDonDH='".$_GET['sohd']."'");
        header('Location:../index.php');
    }
    if(isset($_POST['daht'])){
        $conn->query("UPDATE dathang SET TrangThaiHD= 'Đã Hoàn Thành', MSNV ='".$_SESSION['msnv']."'  WHERE SoDonDH='".$_GET['sohd']."'");
        header('Location:../index.php');
    }
?>