<?php
    include "./mysql_connect.php";
    if (isset($_POST['dangnhap'])) {
        $username = $_POST['sdt'];
        $password = $_POST['password'];
        echo $username ."--". $password;
        if (!$username || !$password) {
            header('Location:../dangnhap.php');
        }
        $result = $conn->query("SELECT MSNV,password FROM nhanvien WHERE MSNV = '" .$username. "'");
        $row = $result->fetch_assoc();
        echo $row['MSNV'] ."--". $row['password'];
        if ($password == $row['password'] && $username == $row['MSNV']) {
            $_SESSION['username'] = $username;
        }
        else{
            header('Location:../dangnhap.php');
        }
    }
?>