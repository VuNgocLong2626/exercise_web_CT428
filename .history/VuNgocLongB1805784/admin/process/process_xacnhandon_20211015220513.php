<?php
    if(isset($_POST['dangxl'])){
        $conn->query("UPDATE dathang SET TrangThai= 'Đang xử lý'  WHERE MSKH='".$_SESSION['msnv']."'");
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    if(isset($_POST['daht'])){

    }
?>