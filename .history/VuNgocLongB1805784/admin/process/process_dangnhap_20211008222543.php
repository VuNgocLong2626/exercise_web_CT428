<?php
    if (isset($_POST['dangnhap'])) {
        $username = addslashes($_POST['sdt']);
        $password = addslashes($_POST['password']);
        
        if (!$username || !$password) {
            header('Location:../dangnhap.php');
        }
        $result = $conn->query("SELECT MSNV,'password' FROM nhanvien WHERE MSNV = '" .$username. "'");
        $row = $result->fetch_assoc();
        echo $row["MSNV"] . '       ' .$row["password"];
    }
?>