<?php
    include "../admin/process/mysql_connect.php"; 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/test.css">
    <title>Chi Tiết Sản Phẩm</title>
</head>
<body>
    <div class="main-contens">
        <div class="header">
            <a href="index.php"><img src="./image/logo120.png" alt="hinh logo" style="margin-left: 40px;"></a>
            <div class="from-individual">
                <a href="giohang.php" class="btn btn-outline-secondary" style="margin-right: 20px; ">Giỏ Hàng</a>
                <?php 
                    if (isset($_SESSION['username_dangnhap'])){
                        echo '<a href="./process_dangnhap_dangxuat.php?process=1" class="btn btn-outline-secondary" style="margin-right: 20px; ">Logout</a>';
                        echo $_SESSION['username_dangnhap'];
                    }
                    else{
                        echo '<a href="./process_dangnhap_dangxuat.php?process=0" class="btn btn-outline-secondary" style="margin-right: 20px; ">Login</a>
                            <a href="" class="btn btn-outline-secondary" style="margin-right: 20px; ">Register</a>';
                    }
                ?>
            </div>
        </div>
        
        <div class="all-cart">
            <h2>Giỏ Hàng</h2>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Hình Ảnh</th>
                    <th scope="col">Tên Sản Phẩm</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Tổng tiền</th>
                    <th scope="col">Thao tác</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        if(isset($_SESSION['giohang'])){
                            $i=1;
                            $tongtien=0;
                            foreach($_SESSION['giohang'] as $item_giohang){
                                $tongtien += $item_giohang['tientong'];
                                echo '
                                <tr>
                                    <th scope="row">'.$i.'</th>
                                    <td><img src="../admin/uploads/'.$item_giohang['TenHinh'].'" style="height: 200px;" alt=""></td>
                                    <td>'.$item_giohang['tensach'].'</td>
                                    <td>'.$item_giohang['giasach'].'</td>
                                    <td>'.$item_giohang['soluong'].'</td>
                                    <td>'.$item_giohang['tientong'].'</td>
                                    <td>
                                        <form action="./process_giohang.php?mshhXoa='.$item_giohang['msx'].'" method="POST">
                                            <input class="btn btn-secondary btn-lg" name="Xoahh" type="submit" value="Xóa">
                                            <br>
                                            <input class="btn btn-secondary btn-lg" style="margin-top: 20px;" name="tang" type="submit" value="Tăng">
                                            <br>
                                            <input class="btn btn-secondary btn-lg" style="margin-top: 20px;" name="giam" type="submit" value="Giảm">
                                        </form>
                                    </td>
                                </tr>';
                                $i++;
                            }


                        }
                    ?>
                </tbody>
                <tr>
                    <td colspan="6">Tổng tiền : 380.000 VND</td>
                    <td>Xóa Tât cả</td>
                </tr>
            </table>
            <a href="#" class="btn btn-secondary btn-lg" style="margin: 50px 500px;">Thanh Toán</a>
        </div>

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