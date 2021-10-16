<?php
    include "../admin/process/mysql_connect.php"; 
    session_start(); 

    echo "Ngay hien tai : ".date("Y-m-d");
    $date = date("Y-m-d");
    $newdate = strtotime ( '+2 day' , strtotime ( $date ) ) ;
    $newdate = date ( "Y-m-d" , $newdate );
    echo "--------Ngay hien tai : ".$newdate.'-----'.$_POST['diachi'];
    if(isset($_POST['xacnhan'])){
        // $conn->query("INSERT INTO dathang(MSKH,NgayDH,NgayGH,DiaChiGiao)  VALUE('".$_SESSION['MSKH']."','".$date."','".$newdate."','".$_POST['diachi']."')");
        $result = $conn->query("SELECT * FROM dathang where MSKH = '".$_SESSION['MSKH']."' ORDER BY SoDonDH DESC limit 1;");
        $row = $result->fetch_assoc();
    }
?>