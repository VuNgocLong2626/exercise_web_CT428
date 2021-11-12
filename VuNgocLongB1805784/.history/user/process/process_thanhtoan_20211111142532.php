<?php
    include "../../admin/process/mysql_connect.php"; 
    session_start(); 

    $date = date("Y-m-d");
    $newdate = strtotime ( '+2 day' , strtotime ( $date ) ) ;
    $newdate = date ( "Y-m-d" , $newdate );
    if(isset($_POST['xacnhan'])){
        $conn->query("INSERT INTO dathang(MSKH,NgayDH,NgayGH,DiaChiGiao)  VALUE('".$_SESSION['MSKH']."','".$date."','".$newdate."','".$_POST['diachi']."')");
        $result = $conn->query("SELECT * FROM dathang where MSKH = '".$_SESSION['MSKH']."' ORDER BY SoDonDH DESC limit 1;");
        $row = $result->fetch_assoc();
        foreach($_SESSION['giohang'] as $item_giohang){
            $conn->query("INSERT INTO chitietdathang(SoDonDH,MSHH,SoLuong,GiaDatHang)  VALUE('".$row['SoDonDH']."','".$item_giohang['msx']."','".$item_giohang['soluong']."','".$item_giohang['tientong']."')");
            $result1 = $conn->query("SELECT * FROM hanghoa WHERE MSHH = '".$item_giohang['msx']."'");
            $row1 = $result1->fetch_assoc();
            $soconlai = $row1['SoLuongHang'] - $item_giohang['soluong'];
            $conn->query("UPDATE hanghoa SET SoLuongHang =".$soconlai." WHERE MSHH = '".$item_giohang['msx']."'");
        }
        unset($_SESSION["giohang"]);
        header('Location: ../index.php');
    }
?>