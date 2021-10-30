<?php
    include "mysql_connect.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $maloai=$_POST['maloai'];
	    $tenloai=$_POST['tenloai'];
    }
    

    if(isset($_POST['themloai'])){
        $conn->query("INSERT INTO loaihanghoa(MaLoaiHang,TenLoaiHang) VALUE('".$maloai."','".$tenloai."')");
    }
    elseif(isset($_POST['capnhat'])){
        $conn->query("UPDATE loaihanghoa SET tenloaihang='".$tenloai."' WHERE (MaLoaiHang='".$maloai."')");
    }
    else {
        $maloai=$_GET['maloaihang'];
		$sql= "DELETE FROM loaihanghoa WHERE (MaLoaiHang='".$maloai."')";
		$conn->query($sql);
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>