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
                <a class="btn btn-secondary btn-size" href="index.php?action=themsanpham">Thêm Sản Phẩm</a>
                <a class="btn btn-secondary btn-size" href="index.php?action=quanlyloaisach">Quản lý loại sách</a>
                <a class="btn btn-secondary btn-size" href="index.php?action=quanlysach">Quản lý Sách</a>
                <a class="btn btn-secondary btn-size" href="index.php?action=xacnhandonhang">Xác nhận đơn hàng</a>
                <a class="btn btn-secondary btn-size" href="index.php?action=quanlynhansu">Quản lý nhân sự</a>
                <a class="btn btn-secondary btn-size" href="index.php?action=themnhansu">Thêm nhân sự</a>
              </div>
        </div>
        <div class="col-9">
            <?php
				if(isset($_GET['action']))
					$t=$_GET['action'];
				else 
					$t='';
					
				switch ($t){
					case 'themsanpham':
						include ("themsanpham.php");
						break;
					case 'quanlyloaisach':
						include ("quanlyloaisach.php");
                        echo"Quản lý loại sách";
						break;
					case 'quanlysach':
						// include ("quanlynhanvien.php");
                        echo"Quản lý Sách";
						break;
					case 'xacnhandonhang':
						// include ("xacnhan.php");
                        echo"Xác nhận đơn hàng";
						break;
                    case 'quanlynhansu':
						// include ("xacnhan.php");
                        echo"Quản lý nhân sự";
						break;
                    case 'themnhansu':
						// include ("xacnhan.php");
                        echo"Thêm nhân sự";
						break;
					// default:
					// 	include ("quanlysach.php");
				}	
			?>
        </div>
    </div>
</body>
</html>

        <!-- <?php
            if ($conn -> connect_errno) {
                echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                exit();
            }
            else{
                echo"Ket noi thanh cong";
            }
        ?> -->