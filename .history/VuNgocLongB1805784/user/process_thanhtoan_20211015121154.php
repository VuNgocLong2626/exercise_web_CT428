<?php
    echo "Ngay hien tai : ".date("Y-m-d");
    $date = date('Y-m-j');
    $newdate = strtotime ( '+2 day' , strtotime ( $date ) ) ;
    echo "Ngay hien tai : ".$newdate;
    // if(isset($_POST['xacnhan'])){
    //     $conn->query("INSERT INTO dathang(MSKH,NgayDH,NgayGH)  VALUE('"$_SESSION['MSKH']"','".date("Y-m-d")."','".$_POST['password']."')");
    // }
?>