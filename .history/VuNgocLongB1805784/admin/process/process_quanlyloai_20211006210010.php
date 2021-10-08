<?php
    include "mysql_connect.php";
    $maloai=$_POST['maloai'];
	$tenloai=$_POST['tenloai'];

    if(isset($_POST['themloai'])){
        $conn->query("INSERT INTO loaihanghoa(MaLoaiHang,TenLoaiHang) VALUE('".$maloai."','".$tenloai."')";);
        header('Location:../index.php?action=quanlydanhmucsach');
    }
    elseif(isset($_POST['capnhat'])){
        echo "cap nhat";
    }
    else {
        echo "ko có";
    }
?>