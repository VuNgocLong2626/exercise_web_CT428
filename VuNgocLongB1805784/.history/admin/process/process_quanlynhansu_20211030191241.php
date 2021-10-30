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
        $conn->query("INSERT INTO nhanvien VALUE('".$msnv."','".$hotenNV."','" .$chucvu. "','".$sdt."','".$pword."')");
    }
    elseif(isset($_POST['capnhatnhansu'])){
        $conn->query("UPDATE nhanvien SET HoTenNV='".$hotenNV."', ChucVu='" .$chucvu. "', SoDienThoai='" .$sdt. "', password='".$pword."' WHERE (MSNV='".$msnv."')");
    }
    else {
        $msnsXoa=$_GET['msnsXoa'];
		$sql= "DELETE FROM nhanvien WHERE (MSNV='".$msnsXoa."')";
		$conn->query($sql);
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
?>