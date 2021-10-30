<?php
    include "./process/mysql_connect.php"; 
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Đăng Nhập Admin</title>
</head>
<body>
    <header>
        <a href="index.php" style="color: #000000; text-decoration: none;"><h1>ADMIN</h1></a>
    </header>
    <div style="width: 40%; margin: 100px auto; background-color: #f1f1f1; padding:100px 50px; border-radius: 50px;">
        <form action='process/process_dangnhap.php' method='POST'>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Mã Số Nhân viên</label>
                <input type="text" class="form-control" id="msnv" name="msnv">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-secondary" name="dangnhap">Đăng nhập</button>
        </form>
    </div>
    <script src="./js/event.js"></script>
</body>
</html>