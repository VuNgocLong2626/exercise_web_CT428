<?php
    include "mysql_connect.php";
    $checkimage = 1;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $mshh=$_POST['mshh'];
	    $tensach=$_POST['tensach'];
        $tenhinhanh=$_FILES['hinhanh']['name'];
        $tenhinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
        $quycach = $_POST['quycach'];
        $maloai=$_POST['maloai'];
        $gia=$_POST['gia'];
        $soluong=$_POST['soluong'];
        $ex = array('jpg', 'png', 'jpeg', 'gif');
        // var_dump($_FILES);
        $floder_path = '../uploads/';
        $file_path = $floder_path.$tenhinhanh;
        $file_type = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));
        $file_load = $floder_path.$mshh.'.'.$file_type;
        if(!in_array($file_type,$ex)){
            $checkimage = 0;
        }
    }elseif($_SERVER['REQUEST_METHOD'] == 'GET') {
        $mshhXoa=$_GET['mshhXoa'];
        $tenhinhXoa=$_GET['tenhinhXoa'];
    }
    
    if($checkimage == 1){
        if(isset($_POST['themsach'])){
            move_uploaded_file($tenhinhanh_tmp,$file_load);
            $conn->query("INSERT INTO hanghoa VALUE('".$mshh."','".$tensach."','" .$quycach. "','".$gia."','".$soluong."','" .$maloai. "')");
            $conn->query("INSERT INTO hinhhanghoa(MSHH,TenHinh) VALUE('".$mshh."','" .$mshh.'.'.$file_type. "')");
            header('Location:../index.php?action=quanlysach');
        }
        elseif(isset($_POST['capnhatanh'])){
            $conn->query("UPDATE hinhhanghoa SET TenHinh='".$mshh.'.'.$file_type."' WHERE (MSHH='".$mshh."')");
            unlink($file_load);
            move_uploaded_file($tenhinhanh_tmp,$file_load);
            header('Location:../index.php?action=quanlysach');
        }
    }

    if(isset($_GET['mshhXoa'])){
        $conn->query("DELETE FROM hanghoa WHERE (MSHH='".$mshhXoa."')");
        $conn->query("DELETE FROM hinhhanghoa WHERE (MSHH='".$mshhXoa."')");
        unlink('../uploads/' . $tenhinhXoa);
        header('Location:../index.php?action=quanlysach');
    }
    elseif(isset($_POST['capnhatsach'])){
        $conn->query("UPDATE hanghoa SET TenHH='".$tensach."', QuyCach='" .$quycach. "', Gia='" .$gia. "', SoLuongHang='".$soluong."' ,MaLoaiHang='".$maloai."'WHERE MSHH='".$mshh."'");
        header('Location:../index.php?action=quanlysach');
    }
?>