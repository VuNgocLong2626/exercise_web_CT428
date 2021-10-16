<?php 
	include "../admin/process/mysql_connect.php"; 
    session_start();
    $_SESSION['username_dangnhap'] = "Long";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/test.css">
    <title>Trang chủ</title>
</head>
<body>
    <div class="main-contens">
        <div class="header">
            <a href="index.php"><img src="./image/logo120.png" alt="hinh logo" style="margin-left: 40px;"></a>
            <div class="from-individual">
                <a href="giohang.php" class="btn btn-outline-secondary" style="margin-right: 20px; ">Giỏ Hàng</a>
                <?php 
                    if (isset($_SESSION['username_dangnhap'])){
                        echo '<a href="process_dangnhap_dangxuat.php?process=1" class="btn btn-outline-secondary" style="margin-right: 20px; ">Logout</a>';
                        echo $_SESSION['username_dangnhap'];
                    }
                    else{
                        echo '<a href="process_dangnhap_dangxuat.php?process=0" class="btn btn-outline-secondary" style="margin-right: 20px; ">Login</a>
                            <a href="" class="btn btn-outline-secondary" style="margin-right: 20px; ">Register</a>';
                    }
                ?>
            </div>
        </div>
        
        <?php
				if(isset($_GET['action']))
					$t=$_GET['action'];
				else 
					$t='';
				switch ($t){
                    case 'themsach':
						break;
                    case 'quanlysach':
						include ("quanlysach.php");
						break;
					case 'quanlyloaisach':
						include ("quanlyloaisach.php");
						break;
					case 'xacnhandonhang':
                        echo"Xác nhận đơn hàng";
						break;
                    case 'quanlynhansu':
						include ("quanlynhansu.php");
						break;
					default:
                        include ("trangchu.php");
                        break;
				}	
			?>

        <footer>
            <h3 style="font-weight: bold;">About me</h3>
            <div class=>
                <div>Vũ Ngọc Long - B1805784
                    <br>
                    Đồ án Lập trình web - CT428 Nhóm 03
                </div>
                <ul style="list-style: none; display: flex;">
                    <li><a href="#" target="_blank"><img src="./image/fb.png" alt="Github icon" style="width: 40px;height: 40px; border-radius: 200px;"></a></li>
                    <li><a href="#" target="_blank"><img src="./image/github.png" alt="Linked icon" style="width: 40px;height: 40px; border-radius: 200px;"></a></li>
                </ul>
                <div>
                    Copyright © 2021 Vũ Ngọc Long
                </div>
            </div>
        </footer>
    </div>
</body>
</html>