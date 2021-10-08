<?php
    include "mysql_connect.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $maloai=$_POST['maloai'];
	    $tenloai=$_POST['tenloai'];
    }
    

    if(isset($_POST['themloai'])){
        $conn->query("INSERT INTO loaihanghoa(MaLoaiHang,TenLoaiHang) VALUE('".$maloai."','".$tenloai."')");
        header('Location:../index.php?action=quanlyloai');
    }
    elseif(isset($_POST['capnhat'])){
        echo "cap nhat";
    }
    else {
        $maloai=$_GET['maloaihang'];
        $maloaihang=$_GET['maloaihang'];
		$sql_xoadm= "DELETE FROM loaihanghoa WHERE (MaLoaiHang='".$maloaihang."')";
		mysqli_query($conn,$sql_xoadm);
		header('Location:../index.php?action=quanlydanhmucsach');
    }
?>