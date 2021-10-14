<?php
    include "../admin/process/mysql_connect.php"; 
    session_start();
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    echo $_GET["mshh"];
    }
?>