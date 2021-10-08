<?php
    if (isset($_POST['dangnhap'])) {
        $username = addslashes($_POST['sdt']);
        $password = addslashes($_POST['password']);
        
        if (!$username || !$password) {
            echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
    }
?>