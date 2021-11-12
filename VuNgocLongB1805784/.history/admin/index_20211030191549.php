<?php 
	include "./process/mysql_connect.php"; 
    session_start();
    if (!isset($_SESSION['username'])){
        header("Location: ./dangnhap.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Admin</title>
</head>
<body>
    <header>
        <a href="index.php" style="color: #000000; text-decoration: none;"><h1>ADMIN</h1></a>
        <a href="dangxuat.php" class="btn btn-outline-secondary" style="margin-right: 20px; float:right;">Đăng xuất</a>
    </header>

    <div class="row" style="max-width: 1900px;">
        <div class="col-3" style="height: 200px;">
            <div class="d-grid gap-2">
                <a class="btn btn-secondary btn-size" href="index.php?action=quanlysach">Quản lý Sách</a>
                <a class="btn btn-secondary btn-size" href="index.php?action=quanlyloaisach">Quản lý loại sách</a>
                <a class="btn btn-secondary btn-size" href="index.php?action=xacnhandon">Xác nhận đơn hàng</a>
                <a class="btn btn-secondary btn-size" href="index.php?action=quanlynhansu">Quản lý nhân sự</a>
              </div>
        </div>
        <div class="col-9">
            <?php
				if(isset($_GET['action']))
					$t=$_GET['action'];
				else 
					$t='';
					
				switch ($t){
                    case 'quanlysach':
						include ("quanlysach.php");
						break;
					case 'quanlyloaisach':
						include ("quanlyloaisach.php");
						break;
					case 'xacnhandon':
						include ("xacnhandon.php");
						break;
                    case 'quanlynhansu':
						include ("quanlynhansu.php");
						break;
                    case 'chitiethoadon':
						include ("chitiethoadon.php");
						break;
					default:
                        include ("xacnhandon.php");
						// include ("chitiethoadon.php");
				}	
			?>
        </div>
    </div>
    <script src="./js/event.js"></script>
</body>
</html>