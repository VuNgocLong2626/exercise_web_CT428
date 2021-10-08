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
                <a class="btn btn-secondary btn-size" src="">Thêm Sản Phẩm</a>
                <a class="btn btn-secondary btn-size" src="">Quản lý loại sách</a>
                <a class="btn btn-secondary btn-size" src="">Quản lý Sách</a>
                <a class="btn btn-secondary btn-size" src="">Xác nhận đơn hàng</a>
                <a class="btn btn-secondary btn-size" src="">Quản lý nhân sự</a>
                <a class="btn btn-secondary btn-size" src="">Thêm nhân sự</a>
              </div>
        </div>
        <div class="col-9">
        <?php
					if(isset($_GET['action']))
						$t=$_GET['action'];
					else 
						$t='';
					
					switch ($t){
						case 'quanlydanhmucsach':
							include ("quanlydanhmucsach.php");
							break;
						case 'quanlysach':
							include ("quanlysach.php");
							break;
						case 'quanlynhanvien':
							include ("quanlynhanvien.php");
							break;
						case 'xacnhandonhang':
							include ("xacnhan.php");
							break;
						default:
							include ("quanlysach.php");
					}
					
				?>

        </div>
    </div>
</body>
</html>

        <?php
            if ($conn -> connect_errno) {
                echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
                exit();
            }
            else{
                echo"Ket noi thanh cong";
            }
        ?>