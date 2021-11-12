<?php
    include ".../admin/process/mysql_connect.php"; 
    session_start(); 

    if(isset($_GET['process'])){
        if (isset($_SESSION['username_dangnhap'])){
            // unset($_SESSION['username_dangnhap']);
            session_destroy();
            header('Location: ./index.php');
        }
    }
    if(isset($_POST['dangN'])){
        $tk = $_POST['telephone'];
        $mk = $_POST['password'];
        $result = $conn->query("SELECT * FROM khachhang WHERE SoDienThoai='".$_POST['telephone']. "' AND password ='".$_POST['password']."'");
        $row = $result->fetch_assoc();
        if($row){
            $_SESSION['username_dangnhap'] = $row['HoTenKH'];
            $_SESSION['MSKH'] = $row['MSKH'];
            header('Location: ./index.php');
        }else{
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
    if(isset($_POST['dangK'])){
        $conn->query("INSERT INTO khachhang(HoTenKH,TenCongTy,SoDienThoai,SoFax,password)  VALUE('".$_POST['Hten']."','".$_POST['cty']."','" .$_POST['telephone']. "','".$_POST['sofax']."','".$_POST['password']."')");
        $result = $conn->query("SELECT * FROM khachhang WHERE SoDienThoai='".$_POST['telephone']. "'");
        $row = $result->fetch_assoc();
        $conn->query("INSERT INTO diachikh(MSKH,DiaChi)  VALUE('".$row['MSKH']."','".$_POST['diachi']."')");
        $_SESSION['username_dangnhap'] = $row['HoTenKH'];
        $_SESSION['MSKH'] = $row['MSKH'];
        header('Location: ./index.php');
    }
    if(isset($_POST['capnhat'])){
        $conn->query("UPDATE khachhang SET HoTenKH='".$_POST['Hten']."' ,TenCongTy='".$_POST['cty']."' , SoFax ='".$_POST['sofax']."' WHERE MSKH='".$_POST['mskh']."'");
        $conn->query("UPDATE diachikh SET DiaChi='".$_POST['diachi']."'  WHERE MSKH='".$_POST['mskh']."'");
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
?>
