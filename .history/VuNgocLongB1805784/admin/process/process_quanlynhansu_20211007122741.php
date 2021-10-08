<?php
    include "mysql_connect.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $msnv=$_POST['msnv'];
	    $hotenNV=$_POST['hotenNV'];
        $chucvu=$_POST['chucvu'];
        $sdt=$_POST['sdt'];
        $pword=$_POST['pword'];
    }
    

    if(isset($_POST['themloai'])){
        $conn->query("INSERT INTO loaihanghoa(MaLoaiHang,TenLoaiHang) VALUE('".$maloai."','".$tenloai."')");
        header('Location:../index.php?action=quanlyloaisach');
    }
    elseif(isset($_POST['capnhat'])){
        $conn->query("UPDATE loaihanghoa SET tenloaihang='".$tenloai."' WHERE (MaLoaiHang='".$maloai."')");
        header('Location:../index.php?action=quanlyloaisach');
    }
    else {
        $maloai=$_GET['maloaihang'];
		$sql= "DELETE FROM loaihanghoa WHERE (MaLoaiHang='".$maloai."')";
		$conn->query($sql);
		header('Location:../index.php?action=quanlyloaisach');
    }
?>