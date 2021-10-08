<?php
    include "mysql_connect.php";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $mshh=$_POST['mshh'];
	    $tensach=$_POST['tensach'];
        $tenhinhanh=$_FILES['hinhanh'];
        $tenhinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
        $maloai=$_POST['maloai'];
        $gia=$_POST['gia'];
        $soluong=$_POST['soluong'];
    }

    echo "  ".$tenhinhanh."   ".$tenhinhanh_tmp;
?>