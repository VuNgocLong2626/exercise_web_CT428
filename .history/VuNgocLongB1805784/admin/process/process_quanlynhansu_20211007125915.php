<?php
    include "mysql_connect.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $msnv=$_POST['msnv'];
	    $hotenNV=$_POST['hotenNV'];
        $chucvu=$_POST['chucvu'];
        $sdt=$_POST['sdt'];
        $pword=$_POST['pword'];
    }
    

    if(isset($_POST['themloainhansu'])){
        $conn->query("INSERT INTO nhanvien VALUE('".$msnv."','".$hotenNV."'" .$chucvu. ")");
        header('Location:../index.php?action=quanlynhansu');
    }
    elseif(isset($_POST['capnhatnhansu'])){
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