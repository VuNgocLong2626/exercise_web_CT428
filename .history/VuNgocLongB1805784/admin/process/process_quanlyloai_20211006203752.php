<?php
    include "mysql_connect.php";
    $maloai=$_POST['maloai'];
	$tenloai=$_POST['tenloai'];

    if(isset($_POST['themloai'])){
        echo "them";
        echo "$maloai";
    }
    elseif(isset($_POST['capnhat'])){
        echo "cap nhat";
    }
    else {
        echo "ko có";
    }
?>