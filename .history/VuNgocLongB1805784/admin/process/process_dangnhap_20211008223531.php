<?php
    include "./mysql_connect.php";
    if (isset($_POST['dangnhap'])) {
        $username = $_POST['sdt'];
        $password = $_POST['password'];
        echo $username ."  ". $password;
        if (!$username || !$password) {
            header('Location:../dangnhap.php');
        }
        $result = $conn->query("SELECT sdt,'password' FROM nhanvien WHERE MSNV = '" .$username. "'");
        $row = $result->fetch_assoc();
        if ($password == $row['password'] && $username == $row['sdt']) {
            echo "plplp";
        }
        else{
            echo "Mật khẩu không đúng. Vui lòng nhập lại";
        }
    }
?>