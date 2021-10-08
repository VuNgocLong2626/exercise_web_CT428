<?php
    if (isset($_POST['dangnhap'])) {
        $username = addslashes($_POST['sdt']);
        $password = addslashes($_POST['password']);
        
        if (!$username || !$password) {
            header('Location:../dangnhap.php');
        }
    }
?>