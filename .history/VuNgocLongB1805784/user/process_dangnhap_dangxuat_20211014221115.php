<?php 
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
    }
    if(isset($_POST['dangK'])){
        $conn->query("INSERT INTO khachhang(HoTenKH,TenCongTy,SoDienThoai,SoFax,password)  VALUE('".$_POST['Hten']."','".$_POST['cty']"','" .$_POST['telephone']. "','".$_POST['sofax']."','".$_POST['password']."')");
        $result = $conn->query("SELECT * FROM khachhang WHERE SoDienThoai='".$_POST['telephone']. "'");
        $row = $result->fetch_assoc();
    }
?>
