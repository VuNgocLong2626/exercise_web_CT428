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
    <title>Document</title>
</head>
<body>
    <header>
        <h1>ADMIN</h1>
        <button type="button" class="btn btn-outline-secondary" style="margin-right: 20px; float:right;">Out</button>
    </header>

    <div class="row">
        <div class="col-3" style="height: 200px;">
            <div class="d-grid gap-2">
                <button class="btn btn-secondary btn-size" type="button">Thêm Sản Phẩm</button>
                <button class="btn btn-secondary btn-size" type="button">Quản lý loại sách</button>
                <button class="btn btn-secondary btn-size" type="button">Quản lý Sách</button>
                <button class="btn btn-secondary btn-size" type="button">Xác nhận đơn hàng</button>
                <button class="btn btn-secondary btn-size" type="button">Quản lý nhân sự</button>
                <button class="btn btn-secondary btn-size" type="button">Thêm nhân sự</button>
              </div>
        </div>
        <div class="col-9">
        <?php
        if ($conn -> connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
            exit();
          }
        else{
            echo"Ket noi thanh cong";
        }
    ?>
        </div>
    </div>
</body>
</html>