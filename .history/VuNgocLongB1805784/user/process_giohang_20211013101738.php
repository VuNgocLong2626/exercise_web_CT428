<?php
    session_start();
    include "../admin/process/mysql_connect.php";
    
    if(isset($_POST['themgiohang'])){
        $mshh = $_GET["mshh"];
        $result = $conn->query("SELECT * FROM hanghoa hh JOIN hinhminhhoa hmh ON hh.MSHH = hmh.MSHH JOIN loaihanghoa lh ON lh.MaLoaiHang = hh.MaLoaiHang WHERE hh.MSHH='".$_GET['mshh']."'");
        $row = $result->fetch_assoc();
        if(!isset($_SESSION['giohang'])){
            $_SESSION['giohang']=[];
        }
    }
?>