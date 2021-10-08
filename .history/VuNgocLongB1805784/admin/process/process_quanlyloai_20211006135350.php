<?php
    include "mysql_connect.php";
    $maloai=$_POST['maloai'];
	$tenloai=$_POST['tenloai'];

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
    echo"$maloai";
    echo"$tenloai";
    }
    else{
        echo"no";
    }
?>