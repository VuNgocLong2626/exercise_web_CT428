<?php
    echo "Ngay hien tai : ".date("Y-m-d");
    if(isset($_POST['xacnhan'])){
        $conn->query("INSERT INTO dathang(MSKH,NgayDH,NgayGH)  VALUE('".$_POST['Hten']."','".$_POST['sofax']."','".$_POST['password']."')");
    }
?>