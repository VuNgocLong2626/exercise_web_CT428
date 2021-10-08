<?php
    include "mysql_connect.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $mshh=$_POST['mshh'];
	    $tensach=$_POST['tensach'];
        $tenhinhanh=$_FILES['hinhanh']['name'];
        $tenhinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
        $maloai=$_POST['maloai'];
        $gia=$_POST['gia'];
        $soluong=$_POST['soluong'];
    }
    $checkimage = 1;
    $ex = array('jpg', 'png', 'jpeg', 'gif');
    // var_dump($_FILES);
    $floder_path = 'uploads/';
    $file_path = $floder_path.$tenhinhanh;
    $file_type = strtolower(pathinfo($file_path, PATHINFO_EXTENSION));

    if(!in_array($file_type,$ex)){
        $checkimage = 0;
    }
    
    if($checkimage == 1){
        
    }
?>